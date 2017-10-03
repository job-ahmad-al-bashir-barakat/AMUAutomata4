<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\UnivercityOfficeNameLang;
use Modules\Utilities\Traits\MultiLangs;

class UnivercityOffice extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['person_id' ,'contact_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(UnivercityOfficeNameLang::class);
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
