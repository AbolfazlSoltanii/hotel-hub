<?php

namespace App\Http\Requests\Reservation;

use App\Models\Reservation\PaymentStatus;
use App\Models\Reservation\ReservationStatus;
use App\Models\Room\Room;
use App\Models\User\User;
use App\Services\Reservation\ReservationService;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class CreateReservationRequest extends FormRequest
{
    public function __construct(private readonly ReservationService $reservationService)
    {
        parent::__construct();
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
                    ->withoutTrashed(),
            ],
            'room_id' => [
                'required',
                'integer',
                Rule::exists(Room::class, 'id')
                    ->withoutTrashed()
            ],
            'reservation_status_id' => [
                'required',
                'integer',
                Rule::exists(ReservationStatus::class, 'id')
            ],
            'payment_status_id' => [
                'required',
                'integer',
                Rule::exists(PaymentStatus::class, 'id')
            ],
            'check_in' => 'required|date|after_or_equal:today|before:check_out',
            'check_out' => 'required|date|after:check_in',
            'total_price' => 'required|numeric|min:0',
            'guest_count' => 'nullable|integer|min:0',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        if ($validator->fails()) {
            return;
        }

        $roomId = $this->room_id;
        $checkIn = $this->check_in;
        $checkOut = $this->check_out;

        $validator->after(function ($validator) use ($roomId, $checkIn, $checkOut) {
            $isRoomReserved = $this->reservationService->isRoomAvailable($roomId, $checkIn, $checkOut);

            if (!$isRoomReserved) {
                return;
            }

            $validator->errors()->add('room_id', __('validation.unique', [
                'attribute' => __('validation.attributes.room_id')
            ]));
        });
    }
}
