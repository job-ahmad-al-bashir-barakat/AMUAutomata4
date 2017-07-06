<?php

namespace Modules\Utilities\Entities;

use Modules\Admin\Entities\Contact;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangsModel\SocialNetworkNameLang;

class SocialNetwork extends \Eloquent
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
