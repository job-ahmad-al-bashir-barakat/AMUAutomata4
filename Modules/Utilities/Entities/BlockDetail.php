<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\BlockDetailBtnLang;
use Modules\Utilities\Entities\LangModels\BlockDetailTextLang;
use Modules\Utilities\Entities\LangModels\BlockDetailTitleLang;

class BlockDetail extends Model
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['block_id', 'page_id', 'icon_id', 'front_image_id', 'back_image_id'];

    protected $appends = ['lang_title', 'lang_text', 'lang_btn', 'image_path'];

    public function transTitle()
    {
        return $this->hasMany(BlockDetailTitleLang::class);
    }

    public function transText()
    {
        return $this->hasMany(BlockDetailTextLang::class);
    }

    public function transBtn()
    {
        return $this->hasMany(BlockDetailBtnLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function getLangBtnAttribute()
    {
        return $this->transBtn->keyBy('lang_code');
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    function front_image()
    {
        return $this->belongsTo(Image::class);
    }

    function back_image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getImagePathAttribute()
    {
        $paths = [
            'front' => '',
            'back' => '',
        ];
        if ($this->front_image) {
            $paths['front'] = self::IMAGE_PATH . 'block-fronts/' . $this->front_image->hash_name;
        }
        if ($this->back_image) {
            $paths['back'] = self::IMAGE_PATH . 'block-backs/' . $this->back_image->hash_name;
        }

        return $paths;
    }
}
