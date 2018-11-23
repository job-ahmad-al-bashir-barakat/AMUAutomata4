<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\WebModules\Modules\Module;

/**
 * @property int menu_id
 */
class MenuPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['menu_id', 'color', 'order', 'buildable_id', 'buildable_type', 'optional_id'];


    public function buildable()
    {
        return $this->morphTo();
    }

    public function scopePageMenu($query, $page = false)
    {
        if ($page) {
            list($buildableType, $buildableId, $optionalId) = explode('.', $page);
        } else {
            $route = request()->route();
            list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        }

        $query->whereBuildableType($buildableType);

        if ((clone $query)->whereBuildableId($buildableId)->count()) {
            $query->whereBuildableId($buildableId);
        }
        //Getting default content
        else {
            $query->whereNull('buildable_id');
        }

        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        }
        return $query;
    }

    public function scopeWhereOrNull($query, $column, $operation, $value = null)
    {
        $argc = count(func_get_args());
        if (3 === $argc) {
            $value = $operation;
            $operation = '=';
        }
        if (is_null($value)) {
            return $query->whereNull($column);
        }
        return $query->where($column, $operation, $value);
    }

    public function menu()
    {
        return $this->belongsTo(MenuList::class, 'menu_id');
    }

    public static function getColorOptions()
    {
        return [
            '1' => 'Red',
            '2' => 'Orange',
            '3' => 'Dark Red',
            '4' => 'Yalow',
            '5' => 'Darkest Red',
            '6' => 'Blue',
        ];
    }
}
