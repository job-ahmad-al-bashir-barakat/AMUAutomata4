<?php

namespace Aut\DataTable\Exceptions;

use RuntimeException;

class NotFoundDataTableException extends RuntimeException
{
    protected $message = 'This model not registered';
}