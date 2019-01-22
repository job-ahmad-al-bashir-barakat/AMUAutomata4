<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\CardUrlLang;
use Modules\Utilities\Entities\LangModels\CardNameLang;
use Modules\Utilities\Entities\LangModels\CardTextLang;
use Modules\Utilities\Entities\LangModels\CardLinkLang;
use Modules\Utilities\Entities\LangModels\CardTitleLang;

class Card extends Model
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['id', 'image_id'];

    protected $appends = ['lang_name', 'lang_title', 'lang_text', 'lang_url', 'lang_link', 'image_path'];

    public function transName()
    {
        return $this->hasMany(CardNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function transTitle()
    {
        return $this->hasMany(CardTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function transText()
    {
        return $this->hasMany(CardTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function transUrl()
    {
        return $this->hasMany(CardUrlLang::class);
    }

    public function getLangUrlAttribute()
    {
        return $this->transUrl->keyBy('lang_code');
    }

    public function transLink()
    {
        return $this->hasMany(CardLinkLang::class);
    }

    public function getLangLinkAttribute()
    {
        return $this->transLink->keyBy('lang_code');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'cards/' . $this->image->hash_name;
        }
        return null;
    }
}
