<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangsModel\UserNameLang;
use Modules\Utilities\Entities\LangsModel\UserSummaryLang;

class User extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['user_name', 'email', 'password'];

    protected $hidden = [
        'password', 'remember_token'
    ];

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
