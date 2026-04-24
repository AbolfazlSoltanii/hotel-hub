<?php

namespace App\Http\Requests\User;

use App\Models\User\Role;
use App\Models\User\User;
use App\Models\User\UserStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'id' => $this->route('user')
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            'id' => [
                'nullable',
                'integer',
                Rule::exists(User::class, 'id')
                    ->withoutTrashed()
            ],
            'email' => [
                'nullable',
                'string',
                'email',
                'max:50',
                Rule::unique('users', 'email')
                    ->withoutTrashed()
                    ->ignore($userId)
            ],
            'phone' => [
                'nullable',
                'string',
                'size:11',
                Rule::unique('users', 'phone')
                    ->withoutTrashed()
                    ->ignore($userId)
            ],
            'password' => 'nullable|string|min:6|confirmed',
            'user_status_id' => [
                'nullable',
                'integer',
                Rule::exists(UserStatus::class, 'id')
            ],
            'role_ids' => 'required|array',
            'role_ids.*' => [
                'nullable',
                'integer',
                Rule::exists(Role::class, 'id')
            ],
        ];
    }
}
