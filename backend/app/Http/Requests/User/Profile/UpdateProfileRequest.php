<?php

namespace App\Http\Requests\User\Profile;

use App\Models\User\Gender;
use App\Models\User\User;
use App\Models\User\UserProfile;
use App\Rules\NationalCodeRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'userId' => $this->route('userId'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $userId = $this->route('userId');

        return [
            'userId' => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
                    ->withoutTrashed(),
            ],
            'gender_id' => [
                'required',
                'integer',
                Rule::exists(Gender::class, 'id')
            ],
            'first_name' => 'nullable|string|max:50',
            'last_name' => 'nullable|string|max:100',
            'national_code' => [
                'required',
                'string',
                'size:10',
                new NationalCodeRule(),
                Rule::unique(UserProfile::class, 'national_code')
                    ->whereNot('user_id', $userId)
            ],
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
