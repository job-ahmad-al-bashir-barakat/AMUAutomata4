<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\WebModules\Modules\Module;

/**
 * @property int custom_module_id
 * @property CustomModule customModule
 */
class BuilderPage extends \Eloquent
{
    use SoftDeletes;

    protected $fillable = ['page_id', 'custom_module_id', 'position', 'order'];

    protected $appends  = ['module'];

    public function customModule()
    {
        return $this->belongsTo(CustomModule::class);
    }

    public function scopePageModules($query, $page = false)
    {
        $route = request()->route();
        $currentPage = $route->getName();

        $query->with(['customModule.attributeValues.attribute']);
        $pageCode = $page ? : $currentPage;

        $pageId = Page::where('page_code', '=', $pageCode)->first(['id'])->id;

        return $query->where('page_id', '=', $pageId)->orderBy('order');
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
