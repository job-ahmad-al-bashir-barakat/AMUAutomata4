<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\UniversityOfficeNameLang;
use Modules\Utilities\Traits\MultiLangs;

class UniversityOffice extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['person_id' ,'contact_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(UniversityOfficeNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    function person()
    {
        return $this->belongsTo(Person::class);
    }
}