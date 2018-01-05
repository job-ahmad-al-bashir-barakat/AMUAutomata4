<?php

namespace Modules\Utilities\Entities;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Table extends \Eloquent
{
    protected $fillable = ['table_name', 'namespace', 'pageable', 'pageable_column', 'menuable', 'morph_code'];

    protected $appends = ['table_name_humane'];

    public function getTableNameHumaneAttribute()
    {
        $tableName = str_replace('_', ' ', $this->table_name);
        return Str::ucfirst($tableName);
    }

    public function scopePageable(Builder $query)
    {
        return $query->where('pageable', '1');
    }

    public function scopeMenuable(Builder $query)
    {
        return $query->where('menuable', '1');
    }

    public function scopeMorphed(Builder $query)
    {
        return $query->whereNotNull('morph_code');
    }

    public function schemaTable()
    {
        return $this->hasOne(SchemaTable::class, 'TABLE_NAME', 'table_name');
    }

    public function languageTables()
    {
        return $this->hasMany(LanguageTable::class);
    }
}
