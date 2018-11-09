<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CourseContentLang;
use Modules\Admin\Entities\LangModels\CourseDescriptionLang;
use Modules\Admin\Entities\LangModels\CourseNameLang;
use Modules\Utilities\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;

class Course extends Model
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['id' ,'code' ,'credit' ,'faculty_id' ,'department_id' ,'degree_id' ,'semester_id' ,'faculty_study_year_id','image_265_id','image_750_id'];

    protected $appends = ['lang_name' ,'lang_description' ,'lang_content' ,'image_path'];

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

    public function transContent()
    {
        return $this->hasMany(CourseContentLang::class);
    }

    public function getLangContentAttribute()
    {
        return $this->transContent->keyBy('lang_code');
    }

    public function getImagePathAttribute()
    {
        $paths = [
            'sm' => '',
            'lg' => '',
        ];
        if ($this->image_265) {
            $paths['sm'] = self::IMAGE_PATH . 'course-265-195s/' . $this->image_265->hash_name;
        }
        if ($this->image_750) {
            $paths['lg'] = self::IMAGE_PATH . 'course-750-500s/' . $this->image_750->hash_name;
        }
        return $paths;
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

    function image_265()
    {
        return $this->belongsTo(Image::class);
    }

    function image_750()
    {
        return $this->belongsTo(Image::class);
    }
}
