<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class SchemaLanguageTable extends \Eloquent
{
    protected $fillable = [];

    protected $table = 'information_schema.tables';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        $database = self::getDatabaseName();
        static::addGlobalScope('age', function (Builder $builder) use ($database) {
            $builder->where('table_schema', '=', $database)->where('table_name', 'like', '%_langs');
        });
    }

    public function languageTable()
    {
        return $this->hasOne(LanguageTable::class, 'table_name', 'TABLE_NAME');
    }

    public function scopeTablesOf(Builder $query, $tableName)
    {
        $tableName = Str::singular($tableName);
        return $query->where('table_name', 'like', "{$tableName}_%_langs");
    }

    /**
     * Getting Database name from config
     * @return string
     */
    private static function getDatabaseName()
    {
        $connection = config('database.default');
        $database = config("database.connections.{$connection}.database");
        return $database;
    }
}
