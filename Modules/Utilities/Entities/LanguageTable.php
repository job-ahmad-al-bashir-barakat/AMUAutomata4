<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class LanguageTable extends \Eloquent
{
    protected $fillable = ['table_id', 'table_name', 'namespace'];

    public function schemaLanguageTable()
    {
        return $this->hasOne(SchemaLanguageTable::class, 'TABLE_NAME', 'table_name');
    }

    public function scopeTablesOf(Builder $query, $tableName)
    {
        $tableName = Str::singular($tableName);
        return $query->where('table_name', 'like', "{$tableName}_%_langs");
    }
}
