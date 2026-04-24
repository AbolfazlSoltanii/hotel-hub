<?php

namespace App\Http\Requests\Amenity;

use App\Models\Amenity\Amenity;
use App\Models\Amenity\AmenityCategory;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAmenityRequest extends FormRequest
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
            'id' => $this->route('amenity'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => [
                'required',
                'integer',
                Rule::exists(Amenity::class, 'id')
                    ->withoutTrashed()
            ],
            'amenity_category_id' => [
                'nullable',
                'integer',
                Rule::exists(AmenityCategory::class, 'id')
            ],
            'name' => [
                'nullable',
                'string',
                Rule::unique(Amenity::class, 'name')
                    ->where('amenity_category_id', $this?->amenity_category_id)
                    ->withoutTrashed()
            ],
            'icon' => 'nullable|string',
        ];
    }
}
