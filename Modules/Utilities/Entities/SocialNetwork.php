<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Admin\Entities\Contact;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SocialNetworkNameLang;

class SocialNetwork extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id' ,'code'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(SocialNetworkNameLang::class);
    }

    public function getLangNameAttribute()
    {
       return $this->transName->keyBy('lang_code');
    }

    public function contact()
    {
        return $this->belongsToMany(Contact::class);
    }
}
