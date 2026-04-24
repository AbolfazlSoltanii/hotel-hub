<?php

namespace App\Http\Requests\Room;

use App\Models\Hotel\Hotel;
use App\Models\Room\Room;
use App\Models\Room\RoomStatus;
use App\Models\Room\RoomType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'id' => $this->route('room')
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $roomId = $this->route('room');

        return [
            'id' => [
                'required',
                'integer',
                Rule::exists(Room::class, 'id')
                    ->withoutTrashed(),
            ],
            'hotel_id' => [
                'nullable',
                'integer',
                Rule::exists(Hotel::class, 'id')
                    ->withoutTrashed()
            ],
            'room_status_id' => [
                'nullable',
                'integer',
                Rule::exists(RoomStatus::class, 'id')
            ],
            'room_type_id' => [
                'nullable',
                'integer',
                Rule::exists(RoomType::class, 'id')
            ],
            'name' => [
                'nullable',
                'string',
                'max:80',
                Rule::unique(Room::class, 'name')
                    ->where('hotel_id', $this->hotel_id)
                    ->withoutTrashed()
                    ->ignore($roomId)
            ],
            'number' => 'nullable|integer',
            'floor' => 'nullable|integer',
            'capacity' => 'nullable|integer',
            'price_per_night' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
        ];
    }
}
