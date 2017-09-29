<?php

namespace Modules\Utilities\Entities;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Degree;
use Modules\Admin\Entities\Department;
use Modules\Admin\Entities\Faculty;
use Modules\Utilities\Entities\LangModels\SiteMenuNameLang;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteMenu extends \Eloquent
{
    use NodeTrait ,MultiLangs ,SoftDeletes;

    protected $fillable = ['id' ,'parent_id' ,'name_route' ,'order' ,'menuable_id' ,'menuable_type'];

    protected $appends = ['lang_name' ,'title'];

    public function getTitleAttribute()
    {
        $lang = \App::getLocale();

        $menuable = $this->menuable;

        if($menuable != null && $menuable->count())
            $title = $menuable->lang_name[$lang]['text'];
        else
            $title = $this->lang_name[$lang]['text'];

        return $title;
    }

    public function scopeTypegeneralCondition($query) {

        $q = str_replace(' ', '%', request()->input('q', ''));

        $query->whereHas('transName' ,function ($query) use($q) {

            $query->where('text', 'like', '%' . $q . '%');
        });

        foreach (MenuTables::all() as $item)
            $query = $query->orWhereHas("{$item->code}.transName", function ($query) use($q) {

                $query->where('text', 'like', '%' . $q . '%');
            });

        return $query;
    }

    public function transName()
    {
        return $this->hasMany(SiteMenuNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function menuable()
    {
        return $this->morphTo();
    }

    function page() {

        return $this->belongsTo(Page::class ,'menuable_id');
    }

    function faculty() {

        return $this->belongsTo(Faculty::class ,'menuable_id');
    }

    function degree() {

        return $this->belongsTo(Degree::class ,'menuable_id');
    }

    function department() {

        return $this->belongsTo(Department::class ,'menuable_id');
    }

}
