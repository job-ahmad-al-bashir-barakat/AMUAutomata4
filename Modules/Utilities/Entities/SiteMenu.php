<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Admin\Entities\Campus;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Degree;
use Modules\Admin\Entities\Faculty;
use Modules\Admin\Entities\Department;
use Modules\Admin\Entities\Lab;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SiteMenuNameLang;

class SiteMenu extends Model
{
    use NodeTrait ,MultiLangs ,SoftDeletes;

    protected $fillable = ['id', 'menu_list_id', 'parent_id', 'name_route', 'order', 'is_link', 'is_show', 'prefix', 'url', 'menuable_id', 'menuable_type', 'dynamic'];

    protected $appends = ['lang_name', 'title', 'title_dynamic', 'title_autocomplete', 'titles' ,'dynamic_info'];

    protected $with = ['menuable'];

    public function getTitleAttribute()
    {
        $lang = \App::getLocale();

        $menuable = $this->menuable;

        if($menuable != null && $menuable->count()) {

            $title = $menuable->lang_name[$lang]['text'];

        } else {

            $title = $this->lang_name[$lang]['text'];
        }

        return $title;
    }

    public function getTitleAutocompleteAttribute()
    {
        $title = $this->title;

        if($this->parent)
            $title .= " ({$this->parent->title})";

        return $title;
    }

    public function getTitleDynamicAttribute()
    {
        $title = $this->title;

        if($this->dynamic)
            $title .= " (Dynamic)";

        return $title;
    }

    public function getTitlesAttribute()
    {
        $menuable = $this->menuable;

        if($menuable != null && $menuable->count())
            $titles = $menuable->lang_name;
        else
            $titles = $this->lang_name;

        return collect($titles);
    }

    public function getDynamicInfoAttribute()
    {
        if ($this->dynamic) {
            $model = Table::where('morph_code','=',$this->dynamic)->first()->namespace;
            return $model::all();
        }
    }

    public function scopeTypeGeneralCondition($query) {

        $q = str_replace(' ', '%', request()->input('q', ''));

        $query->whereHas('transName' ,function ($query) use($q) {
            $query->where('text', 'like', '%' . $q . '%');
        });

        $tableItems = Table::pageable()->menuable()->orDynamic()->morphed()->get();

        foreach ($tableItems as $item)
            $query = $query->orWhereHas("{$item->morph_code}.transName", function ($query) use($q) {
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

    function course() {
        return $this->belongsTo(Course::class,'menuable_id');
    }

    function lab() {
        return $this->belongsTo(Lab::class,'menuable_id');
    }

    function campus() {
        return $this->belongsTo(Campus::class,'menuable_id');
    }
}
