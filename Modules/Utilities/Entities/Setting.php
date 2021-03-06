<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SettingNameLang;

class Setting extends Model
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
