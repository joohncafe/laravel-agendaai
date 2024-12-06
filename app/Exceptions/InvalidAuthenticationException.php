<?php

namespace App\Exceptions;

use Exception;
use App\Traits\RenderToJson;

class InvalidAuthenticationException extends Exception
{
    use RenderToJson;
    protected $message = "Your credentioal don't match";
    protected $code = 400;

}
