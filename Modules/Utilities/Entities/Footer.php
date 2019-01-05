<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Admin\Entities\Contact;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\FooterNameLang;
use Modules\Utilities\Entities\LangModels\FooterTextLang;

class Footer extends Model
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['image_id', 'contact_id', 'is_default'];

    protected $appends  = ['lang_name', 'lang_text', 'logo_path'];

    public function transName()
    {
        return $this->hasMany(FooterNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function transText()
    {
        return $this->hasMany(FooterTextLang::class);
    }

    public function getLangTextAttribute()
    {
        return $this->transText->keyBy('lang_code');
    }

    public function getLogoPathAttribute()
    {
        if ($this->image) {
            return self::IMAGE_PATH . 'footer_logos/' . $this->image->hash_name;
        }
        return null;
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function footerLinks()
    {
        return $this->hasMany(FooterLink::class);
    }
}
