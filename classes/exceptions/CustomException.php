<?php

namespace classes\exceptions;

use Exception;

class CustomException extends Exception
{
    public function __construct($specialInfo, $code = 0, \Throwable $previous = null)
    {
        $essage = 'This is a CustomException errror message: ' . $specialInfo .  '<br>';
    }
}
