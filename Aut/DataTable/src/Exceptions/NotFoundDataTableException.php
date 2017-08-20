<?php

namespace Aut\DataTable\Exceptions;


use Intervention\Image\Exception\RuntimeException;

class NotFoundDataTableException extends RuntimeException
{
    protected $message = 'This model not registered';
}