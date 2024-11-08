<?php
namespace BitApps\SMTP\Deps\BitApps\WPValidator\Rules;

use BitApps\SMTP\Deps\BitApps\WPValidator\Rule;

class ArrayRule extends Rule
{
    private $message = "The :attribute must be array";

    public function validate($value)
    {
        return is_array($value);
    }

    public function message()
    {
        return $this->message;
    }
}
