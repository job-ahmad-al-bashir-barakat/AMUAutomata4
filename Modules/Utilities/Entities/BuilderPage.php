<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\WebModules\Modules\Module;

/**
 * @property int custom_module_id
 * @property CustomModule customModule
 * @method Module module()
 */
class BuilderPage extends \Eloquent
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
        $route = request()->route();
        list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        $query->with(['customModule.attributeValues.attribute']);
        $query->whereBuildableId($buildableId)->whereBuildableType($buildableType);
        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        }
        return $query->orderBy('order');
    }

    /**
     * Module Extra Attribute
     *
     * @return Module
     */
    public function getModuleAttribute()
    {
        $module = Module::setModule($this->customModule->module_id);
        $module->customModuleId = $this->custom_module_id;
        $module->data = $this->customModule->attributeValues->pluck('value', 'attribute.code');
        $module->getAttributeValue();
        return $module;
    }
}
