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
        $query->with(['customModule']);
        $currentPage = $page ? : 1;// use $page or auto detect the page from route name

        return $query->where('page_id', '=', $currentPage)->orderBy('order');
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
