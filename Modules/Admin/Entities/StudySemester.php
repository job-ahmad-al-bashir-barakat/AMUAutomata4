<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\StudySemesterNameLang;

class StudySemester extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['semester', 'type'];

    protected $appends = ['lang_name'];
    
    public function transName()
    {
        return $this->hasMany(StudySemesterNameLang::class);
    }
    
    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
    
}
