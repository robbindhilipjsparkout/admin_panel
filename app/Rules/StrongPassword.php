<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPassword implements Rule
{
    public function passes($attribute, $value)
    {
        // Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
        return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.';
    }
}
