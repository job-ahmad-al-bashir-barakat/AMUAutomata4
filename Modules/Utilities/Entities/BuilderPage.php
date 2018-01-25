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
        $currentPage = explode('.', $route->getName());
        $buildableType = $currentPage[0];
        $buildableId = $currentPage[1];
        $query->with(['customModule.attributeValues.attribute']);
        return $query->whereBuildableId($buildableId)->whereBuildableType($buildableType)->orderBy('order');
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
