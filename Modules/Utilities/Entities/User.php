<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\UserNameLang;
use Modules\Utilities\Entities\LangModels\UserSummaryLang;

class User extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['id' ,'name', 'email', 'password'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $appends = ['lang_name','lang_summary'];

    public function transName()
    {
        return $this->hasMany(UserNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function transSummary()
    {
        return $this->hasMany(UserSummaryLang::class);
    }

    public function getLangSummaryAttribute()
    {
        return $this->transSummary->keyBy('lang_code');
    }

    function setPasswordAttribute($password)
    {
        if(empty($password))
            $password = $this->getOriginal('password');
        else
            if($password != $this->getOriginal('password'))
                $password = bcrypt($password);

        $this->attributes['password'] = $password;
    }
}