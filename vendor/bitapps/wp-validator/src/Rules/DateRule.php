<?php
namespace BitApps\SMTP\Deps\BitApps\WPValidator\Rules;

use BitApps\SMTP\Deps\BitApps\WPValidator\Rule;

class DateRule extends Rule
{
    private $message = "The :attribute is not a valid date";

    public function validate($value)
    {
        return strtotime($value) !== false;
    }

    public function message()
    {
        return $this->message;
    }
}
