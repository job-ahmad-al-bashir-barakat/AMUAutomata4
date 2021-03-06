<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\ModuleNameLang;
use Modules\Utilities\Entities\LangModels\ModuleDescriptionLang;

class Module extends Model
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['image_id', 'code', 'customized'];

    protected $appends  = ['lang_name', 'lang_description', 'image_path'];

    public function transName()
    {
        return $this->hasMany(ModuleNameLang::class);
    }

    public function transDescription()
    {
        return $this->hasMany(ModuleDescriptionLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'module_attribute');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'modules/' . $this->image->hash_name;
        }
        return null;
    }
}
