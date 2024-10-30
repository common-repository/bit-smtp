<?php
namespace BitApps\SMTP\Deps\BitApps\WPValidator\Rules;

use BitApps\SMTP\Deps\BitApps\WPValidator\Rule;

class UppercaseRule extends Rule
{
    private $message = "The :attribute must be in uppercase";

    public function validate($value)
    {
        return $value === strtoupper($value);
    }

    public function message()
    {
        return $this->message;
    }
}
