<?php

namespace Modules\Admin\Entities;

use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\SemesterNameLang;

class Semester extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];
    
    public function transName()
    {
        return $this->hasMany(SemesterNameLang::class);
    }
    
    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
    
}
