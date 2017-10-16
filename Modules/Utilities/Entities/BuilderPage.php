<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\WebModules\Modules\Module;

class BuilderPage extends Model
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

        $query->with(['customModule']);
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
        return Module::setModule($this->customModule->module_id);
    }
}
