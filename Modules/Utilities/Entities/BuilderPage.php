<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\WebModules\Modules\Module;

/**
 * @property int custom_module_id
 * @property CustomModule customModule
 * @method Module module()
 */
class BuilderPage extends Model
{
    use SoftDeletes;

    protected $fillable = ['custom_module_id', 'position', 'order', 'buildable_id', 'buildable_type', 'optional_id'];

    protected $appends  = ['module'];

    public function customModule()
    {
        return $this->belongsTo(CustomModule::class);
    }

    public function buildable()
    {
        return $this->morphTo();
    }

    public function scopePageModules($query, $page = false)
    {
        if ($page) {
            list($buildableType, $buildableId, $optionalId) = explode('.', $page);
        } else {
            $route = request()->route();
            list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        }

        $query->with(['customModule.attributeValues.attribute']);

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
        return $query->orderBy('order');
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

    /**
     * Module Extra Attribute
     *
     * @return Module
     * @throws \Exception
     */
    public function getModuleAttribute()
    {
        if (!$this->customModule) {
            return null;
        }
        $module = Module::setModule($this->customModule->module_id);
        $module->customModuleId = $this->custom_module_id;
        $module->data = $this->customModule->attributeValues->pluck('value', 'attribute.code');
        $module->getAttributeValue();
        return $module;
    }
}
