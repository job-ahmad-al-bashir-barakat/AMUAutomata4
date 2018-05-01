<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CourseDescriptionLang;
use Modules\Admin\Entities\LangModels\CourseNameLang;
use Modules\Utilities\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;

class Course extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/courses/';

    protected $fillable = ['id' ,'code' ,'credit' ,'faculty_id' ,'department_id' ,'degree_id' ,'semester_id' ,'faculty_study_year_id' ,'image_id'];

    protected $appends = ['lang_name' ,'lang_description', 'image_path'];

    public function transName()
    {
        return $this->hasMany(CourseNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function transDescription()
    {
        return $this->hasMany(CourseDescriptionLang::class);
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            $imageName = $this->image->hash_name ?: '';
        } else {
            $imageName = '';
        }
        return self::IMAGE_PATH . $imageName;
    }


    /*
     * relation
     */
    function department()
    {
        return $this->belongsTo(Department::class);
    }

    function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    function facultyStudyYear()
    {
        return $this->belongsTo(FacultyStudyYear::class);
    }

    function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function prerequisiteGroup()
    {
        return self::hasMany(PrerequisiteGroup::class);
    }

    public function prerequisite()
    {
        return self::belongsToMany(PrerequisiteGroup::class ,'prerequisite');
    }

    function image()
    {
        return $this->belongsTo(Image::class);
    }
}
