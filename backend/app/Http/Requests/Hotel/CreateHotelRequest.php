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

class CreateHotelRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'city_id' => [
                'required',
                'integer',
                Rule::exists(City::class, 'id')
                    ->withoutTrashed()
            ],
            'manager_id' => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
                    ->where('user_status_id', 1)
                    ->withoutTrashed()
            ],
            'name' => [
                'required',
                'string',
                'max:80',
                Rule::unique(Hotel::class, 'name')
                    ->withoutTrashed()
            ],
            'description' => 'nullable|string',
            'stars' => 'required|integer|between:1,5',
            'address' => 'nullable|string',
            'website' => 'nullable|url',
            'phone' => [
                'nullable',
                'string',
                'max:20',
                Rule::unique(Hotel::class, 'phone')
                    ->withoutTrashed()
            ],
            'email' => [
                'nullable',
                'string',
                'email',
                'max:100',
                Rule::unique(Hotel::class, 'email')
                    ->withoutTrashed()
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

        $managerId = $this->manager_id;

        $validator->after(function ($validator) use ($managerId) {
            $isValidManager = $this->userService->isManagerExists($managerId);

            if ($isValidManager) {
                return;
            }

            $validator->errors()->add('manager_id', __('validation.exists', [
                    'attribute' => __('validation.attributes.manager_id')
                ])
            );
        });
    }
}
