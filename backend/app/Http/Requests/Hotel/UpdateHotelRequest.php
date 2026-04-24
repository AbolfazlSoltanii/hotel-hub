<?php

namespace App\Http\Requests\Hotel;

use App\Models\City;
use App\Models\Hotel\Hotel;
use App\Models\User\User;
use App\Services\User\UserService;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class UpdateHotelRequest extends FormRequest
{
    public function __construct(
        private readonly UserService $userService
    )
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

    protected function prepareForValidation(): void
    {
        $this->merge([
            'id' => $this->route('hotel'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $hotelId = $this->route('hotel');

        return [
            'id' => [
                'required',
                'integer',
                Rule::exists(Hotel::class, 'id')
                    ->withoutTrashed()
            ],
            'city_id' => [
                'sometimes',
                'integer',
                Rule::exists(City::class, 'id')
                    ->withoutTrashed()
            ],
            'manager_id' => [
                'sometimes',
                'integer',
                Rule::exists(User::class, 'id')
                    ->where('user_status_id', 1)
                    ->withoutTrashed()
            ],
            'name' => [
                'sometimes',
                'string',
                'max:80',
                Rule::unique('hotels')
                    ->withoutTrashed()
                    ->ignore($hotelId)
            ],
            'description' => 'nullable|string',
            'stars' => 'sometimes|integer|between:1,5',
            'address' => 'nullable|string',
            'website' => 'nullable|url',
            'phone' => [
                'nullable',
                'string',
                'max:20',
                Rule::unique('hotels')
                    ->withoutTrashed()
                    ->ignore($hotelId)
            ],
            'email' => [
                'nullable',
                'string',
                'email',
                'max:100',
                Rule::unique('hotels')
                    ->withoutTrashed()
                    ->ignore($hotelId)
            ],
            'logo' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        if ($validator->fails()) {
            return;
        }

        $data = $this->all();
        $managerId = $data['manager_id'] ?? null;

        if (!$managerId) {
            return;
        }

        $validator->after(function ($validator) use ($managerId) {
            $isValidManager = $this->userService->isManagerExists($managerId);

            if ($isValidManager) {
                return;
            }

            $validator->errors()->add('manager_id', __('validation.exists', [
                'attribute' => __('validation.attributes.manager_id')
            ]));
        });
    }
}
