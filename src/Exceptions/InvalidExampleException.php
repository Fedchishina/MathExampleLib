<?php

namespace MathExampleLib\Exceptions;

use Throwable;

class InvalidExampleException extends \Exception
{
    public function __construct($message = "Invalid data example", $code = 401, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}