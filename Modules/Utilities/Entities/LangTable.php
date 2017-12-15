<?php

namespace Modules\Utilities\Entities;

class LangTable extends \Eloquent
{
    protected $fillable = ['table_id', 'table_name', 'namespace'];
}
