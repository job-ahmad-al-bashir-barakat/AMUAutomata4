<?php

namespace Modules\Utilities\Entities;

class LanguageTable extends \Eloquent
{
    protected $fillable = ['table_id', 'table_name', 'namespace'];
}
