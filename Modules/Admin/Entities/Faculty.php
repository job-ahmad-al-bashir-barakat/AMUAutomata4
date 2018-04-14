<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\FacultyNameLang;
use Modules\Utilities\Entities\SiteMenu;
use Modules\Utilities\Traits\MultiLangs;

class Faculty extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_name' , 'faculty_name'];

    public function transName()
    {
        return $this->hasMany(FacultyNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function getFacultyNameAttribute()
    {
        return $this->lang_name[\App::getLocale()]['text'];
    }

    public function studyYear()
    {
        return $this->belongsToMany(StudyYear::class)->withPivot('id');
    }
}
