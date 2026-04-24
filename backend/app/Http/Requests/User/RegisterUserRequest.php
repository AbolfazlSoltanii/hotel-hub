<?php

namespace App\Http\Requests\User;

use App\Models\User\Role;
use App\Models\User\UserStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterUserRequest extends FormRequest
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
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                Rule::unique('users', 'email')
                    ->withoutTrashed()
            ],
            'phone' => [
                'required',
                'string',
                'size:11',
                Rule::unique('users', 'phone')
                    ->withoutTrashed()
            ],
            'password' => 'required|string|min:6|confirmed',
            'user_status_id' => [
                'required',
                'integer',
                Rule::exists(UserStatus::class, 'id')
            ],
            'role_ids' => 'required|array',
            'role_ids.*' => [
                'required',
                'integer',
                Rule::exists(Role::class, 'id')
            ],
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:100',
        ];
    }
}
