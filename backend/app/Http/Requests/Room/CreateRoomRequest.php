<?php

namespace App\Http\Requests\Room;

use App\Models\Hotel\Hotel;
use App\Models\Room\Room;
use App\Models\Room\RoomStatus;
use App\Models\Room\RoomType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRoomRequest extends FormRequest
{
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
            'hotel_id' => [
                'required',
                'integer',
                Rule::exists(Hotel::class, 'id')
                    ->withoutTrashed()
            ],
            'room_status_id' => [
                'required',
                'integer',
                Rule::exists(RoomStatus::class, 'id')
            ],
            'room_type_id' => [
                'required',
                'integer',
                Rule::exists(RoomType::class, 'id')
            ],
            'name' => [
                'required',
                'string',
                'max:80',
                Rule::unique(Room::class, 'name')
                    ->where('hotel_id', $this->hotel_id)
                    ->withoutTrashed()
            ],
            'number' => 'nullable|integer',
            'floor' => 'nullable|integer',
            'capacity' => 'required|integer',
            'price_per_night' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ];
    }
}
