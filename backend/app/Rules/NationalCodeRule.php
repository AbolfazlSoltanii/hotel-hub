<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class NationalCodeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param Closure(string, ?string=): PotentiallyTranslatedString $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value) || !preg_match('/^[0-9]{10}$/', $value)) {
            return;
        }

        $code = (string)$value;
        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += (int)$code[$i] * (10 - $i);
        }

        $remainder = $sum % 11;
        $controlDigit = $remainder < 2 ? $remainder : 11 - $remainder;

        if ((int)$code[9] !== $controlDigit) {
            $fail(__('validation.national_code.NationalCodeRule.in_valid'));
        }
    }
}
