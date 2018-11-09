<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Modules\Utilities\Entities\SocialNetwork;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\ContactAddressLang;

class Contact extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $transInputs = [
        'transAddress' => 'contact',
    ];

    protected $fillable = ['email' ,'phone' ,'mobile' ,'fax' ,'gelocation' ,'url'];

    protected $with = ['socialNetwork'];

    protected $appends = ['social' ,'lang_address'];

    public function transAddress()
    {
        return $this->hasMany(ContactAddressLang::class);
    }

    public function getLangAddressAttribute()
    {
        return $this->transAddress->keyBy("lang_code");
    }

    function socialNetwork()
    {
        return $this->belongsToMany(SocialNetwork::class)->withPivot(['url']);
    }

    function getSocialAttribute()
    {
        return $this->socialNetwork->keyBy('code');
    }

    function phoneNumbers()
    {
        return $this->hasMany(PhoneNumbers::class);
    }

    function addresses()
    {
        return $this->hasMany(Addresses::class);
    }
}
