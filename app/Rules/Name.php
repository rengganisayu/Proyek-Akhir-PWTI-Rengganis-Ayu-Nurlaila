<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Username implements Rule
{
    public function passes($attribute, $value)
    {
        // Logika validasi kustom
        return preg_match('/^[a-zA-Z0-9_]+$/', $value);
    }

    public function message()
    {
        return 'The :attribute may only contain letters, numbers, and underscores.';
    }
}
