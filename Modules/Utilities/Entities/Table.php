<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\Builder;
use Modules\Utilities\Entities\LangModels\TableNameLang;

/**
 * @property string table_name
 * @property string namespace
 * @property string pageable
 * @property string pageable_column
 * @property string menuable
 * @property string morph_code
 */
class Table extends Model
{
    use MultiLangs;

    const menuableTypes = [
        'pages' => 'pages',// the records are pages not shown in menu
        'links' => 'links',// the record is link
        'list' => 'list',// the records are dropdown menu
        'listable' => 'listable',// this record is list contain something
    ];

    protected $fillable = ['table_name', 'namespace', 'pageable', 'pageable_column', 'menuable', 'morph_code', 'menuable_type', 'dynamic'];

    protected $appends = ['lang_name', 'pageable_columns'];


    public function getPageableColumnsAttribute()
    {
        return json_decode($this->pageable_column, true);
    }

    public function transName()
    {
        return $this->hasMany(TableNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function getTableNamespaceAttribute()
    {
        return $this->namespace;
        //$modelName = Str::studly(Str::singular($this->table_name));
        //return "{$this->namespace}\\{$modelName}";
    }

    public function scopePageable(Builder $query)
    {
        return $query->where('pageable', '1');
    }

    public function scopeMenuable(Builder $query)
    {
        return $query->where('menuable', '1');
    }

    public function scopeDynamic(Builder $query)
    {
        return $query->where('dynamic', '1');
    }

    public function scopeOrDynamic(Builder $query)
    {
        return $query->orWhere('dynamic', '1');
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
