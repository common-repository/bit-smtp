<?php
namespace BitApps\SMTP\Deps\BitApps\WPValidator\Rules;

use BitApps\SMTP\Deps\BitApps\WPValidator\Helpers;
use BitApps\SMTP\Deps\BitApps\WPValidator\Rule;

class RequiredRule extends Rule
{
    use Helpers;

    private $message = 'The :attribute field is required';

    public function validate($value)
    {
        return !$this->isEmpty($value);
    }

    public function message()
    {
        return $this->message;
    }
}
