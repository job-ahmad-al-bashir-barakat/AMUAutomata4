<?php

namespace Aut\Eloquent\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Spatie\Activitylog\Traits\LogsActivity;

abstract class Model extends BaseModel
{
    use LogsActivity;
    protected static $logFillable = true;
    protected static $logAttributesToIgnore = [ 'password'];
}