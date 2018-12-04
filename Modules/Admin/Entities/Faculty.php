<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\FacultyNameLang;

class Faculty extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id','campus_id'];

    protected $appends = ['lang_name' , 'faculty_name', 'campus_name'];

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

    public function getCampusNameAttribute()
    {
        if (!$this->campus) {
            return null;
        }
        return $this->campus->lang_name[app()->getLocale()]->text;
    }

    public function studyYear()
    {
        return $this->belongsToMany(StudyYear::class)->withPivot('id');
    }

    function campus()
    {
        return $this->belongsTo(Campus::class);
    }
}
