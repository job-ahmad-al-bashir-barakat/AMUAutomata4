<?php

namespace Modules\Utilities\Entities;

class Table extends \Eloquent
{
    protected $fillable = ['table_name', 'namespace', 'pageable', 'menuable'];


    public function schemaTable()
    {
        return $this->hasOne(SchemaTable::class, 'TABLE_NAME', 'table_name');
    }
}
