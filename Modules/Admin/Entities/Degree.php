<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\DegreeNameLang;

class Degree extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id' ,'faculty_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(DegreeNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    /*
     * relation
     */

    function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
