<?php

namespace App\Http\Requests\Hotel\Review;

use App\Models\Hotel\Hotel;
use App\Models\Hotel\Review;
use App\Models\User\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReviewRequest extends FormRequest
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
            'id' => $this->route('review'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $reviewId = $this->route('review');

        return [
            'id' => [
                'required',
                'integer',
                Rule::exists(Review::class, 'id')
                    ->withoutTrashed(),
            ],
            'user_id' => [
                'nullable',
                'integer',
                Rule::exists(User::class, 'id')
                    ->withoutTrashed()
            ],
            'hotel_id' => [
                'nullable',
                'integer',
                Rule::exists(Hotel::class, 'id')
                    ->withoutTrashed(),
                Rule::unique(Review::class, 'hotel_id')
                    ->where('user_id', $this->user_id)
                    ->withoutTrashed()
                ->ignore($reviewId)
            ],
            'rating' => 'nullable|integer|between:1,5',
            'comment' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'unique' => 'برای این هتل توسط کاربر انتخاب شده نظر ثبت شده است.'
        ];
    }
}
