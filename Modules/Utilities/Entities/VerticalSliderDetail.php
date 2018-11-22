<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailTextLang;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailSubTextLang;
use Modules\Utilities\Entities\LangModels\VerticalSliderDetailSmallTextLang;

class VerticalSliderDetail extends Model
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/vertical_sliders/';

    protected $fillable = ['vertical_slider_id', 'image_id'];

    protected $appends = ['lang_text', 'lang_sub_text', 'lang_small_text', 'image_path'];

    public function transText()
    {
        return $this->hasMany(VerticalSliderDetailTextLang::class);
    }

    public function transSubText()
    {
        return $this->hasMany(VerticalSliderDetailSubTextLang::class);
    }

    public function transSmallText()
    {
        return $this->hasMany(VerticalSliderDetailSmallTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function getLangSubTextAttribute()
    {
        return $this->transSubText->keyBy('lang_code');
    }

    public function getLangSmallTextAttribute()
    {
        return $this->transSmallText->keyBy('lang_code');
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            $imageName = $this->image->hash_name ?: '';
        } else {
            $imageName = '';
        }
        return self::IMAGE_PATH . $imageName;
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
