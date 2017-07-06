<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\MultiLangs;

class Setting extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id' ,'code' ,'value'];

    protected $appends = ['lang_name'];
    
    public function transName()
    {
        return $this->hasMany(SettingNameLang::class);
    }
    
    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
    
}
