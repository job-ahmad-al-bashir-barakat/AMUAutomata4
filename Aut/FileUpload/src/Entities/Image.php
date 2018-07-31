<?php

namespace Aut\FileUpload\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\ImageAltLang;
use Modules\Utilities\Traits\MultiLangs;
use Storage;

class Image extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    const FOLDER_STORAGE_PATH = 'upload/image/{folder}';

    protected $fillable = ['name' ,'hash_name' ,'ext' ,'size' ,'width' ,'height'];

    protected $appends = ['image_url' ,'type', 'lang_alt'];

    public function getImageUrlAttribute()
    {
        $imagePath = self::FOLDER_STORAGE_PATH;

        return url(Storage::url("$imagePath/$this->hash_name"));
    }

    public function getTypeAttribute()
    {
        return 'image';
    }

    function transAlt() {

        return $this->hasMany(ImageAltLang::class);
    }

    public function getLangAltAttribute()
    {
        return $this->transAlt->keyBy('lang_code');
    }
}
