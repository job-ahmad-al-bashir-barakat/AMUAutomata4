<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\TenderTextLang;

class Tender extends Model
{
    use MultiLangs, SoftDeletes;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['image_id'];

    protected $appends = ['lang_text', 'image_path', 'thumb_path'];

    public function transText()
    {
        return $this->hasMany(TenderTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy("lang_code");
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'tenders/' . $this->image->hash_name;
        }
        return null;
    }

    public function getThumbPathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'tenders/thumps/small/' . $this->image->hash_name;
        }
        return null;
    }
}
