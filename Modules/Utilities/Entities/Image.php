<?php

namespace Modules\Utilities\Entities;

use Storage;
use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\ImageAltLang;

class Image extends Model
{
    use SoftDeletes ,MultiLangs;

    const FOLDER_STORAGE_PATH = 'upload/image/{folder}';

    protected $fillable = ['id' ,'name' ,'hash_name' ,'ext' , 'size','width' ,'height'];

    protected $appends = ['lang_alt' ,'image_url' ,'type'];

    public function getImageUrlAttribute()
    {
        $imagePath = self::FOLDER_STORAGE_PATH;

        return url(Storage::url("$imagePath/$this->hash_name"));
    }

    public function getTypeAttribute()
    {
        return 'image';
    }

    public function transAlt()
    {
        return $this->hasMany(ImageAltLang::class);
    }

    public function getLangAltAttribute()
    {
        return $this->transAlt->keyBy('lang_code');
    }
}
