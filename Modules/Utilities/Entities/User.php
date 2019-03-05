<?php

namespace Modules\Utilities\Entities;

use Aut\FileUpload\Entities\Image;
use Spatie\Permission\Traits\HasRoles;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\Eloquent\Models\User as Authenticatable;
use Modules\Utilities\Entities\LangModels\UserNameLang;
use Modules\Utilities\Entities\LangModels\UserSummaryLang;

class User extends Authenticatable
{
    use SoftDeletes, MultiLangs, HasRoles;

    const IMAGE_PATH = 'storage/upload/image/users/';

    protected $fillable = ['id' ,'name', 'email', 'password' ,'image_id'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $appends = ['lang_name','lang_summary' ,'image_path'];

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

    function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getImagePathAttribute()
    {
        if (!$this->image) {
            return '';
        }
        return self::IMAGE_PATH . $this->image->hash_name;
    }
}