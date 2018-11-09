<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\GalleryTitleLang;

class Gallery extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_title'];

    public function transTitle()
    {
        return $this->hasMany(GalleryTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function image()
    {
        return $this->belongsToMany(Image::class, 'gallery_images');
    }
}
