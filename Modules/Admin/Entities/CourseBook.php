<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Aut\FileUpload\Entities\File;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\CourseBookNameLang;
use Modules\Utilities\Traits\MultiLangs;

class CourseBook extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['name', 'course_id', 'file_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(CourseBookNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    function file() {
        return $this->belongsTo(File::class);
    }
}
