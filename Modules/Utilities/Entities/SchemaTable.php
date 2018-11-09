<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\Builder;

class SchemaTable extends Model
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
            $builder->where('table_schema', '=', $database)->where('table_name', 'not like', '%_langs');
        });
    }

    public function table()
    {
        return $this->hasOne(Table::class, 'table_name', 'TABLE_NAME');
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
