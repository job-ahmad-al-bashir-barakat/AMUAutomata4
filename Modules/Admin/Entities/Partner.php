<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\PartnerNameLang;
use Modules\Admin\Entities\LangModels\PartnerDescriptionLang;

class Partner extends Model
{
    use MultiLangs, SoftDeletes;

    const LARGE_IMAGE_PATH = 'storage/upload/image/partner-large-images/';
    const SMALL_IMAGE_PATH = 'storage/upload/image/partner-small-images/';

    protected $fillable = ['contact_id'];

    protected $appends = ['lang_name', 'lang_description', 'large_image_path', 'small_image_path'];

    protected static function boot() {

        parent::boot();

        static::deleting(function($partner) {

            foreach ($partner->contact()->get() as $contact)
                $contact->socialNetwork()->sync([]);

            $partner->image()->sync([]);

            $partner->contact()->delete();
        });
    }

    public function transName()
    {
        return $this->hasMany(PartnerNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }

    public function transDescription()
    {
        return $this->hasMany(PartnerDescriptionLang::class);
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy("lang_code");
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    function image()
    {
        return $this->belongsToMany(Image::class);
    }

    function image_small()
    {
        return $this->belongsToMany(Image::class)->wherePivot('image_type' ,'=' ,'small');
    }

    function image_large()
    {
        return $this->belongsToMany(Image::class)->wherePivot('image_type' ,'=' ,'large');
    }

    public function getLargeImagePathAttribute()
    {
        if ($this->image_large->count()) {
            $imageName = $this->image_large->first()->hash_name ?: '';
        } else {
            $imageName = '';
        }

        return self::LARGE_IMAGE_PATH . $imageName;
    }

    public function getSmallImagePathAttribute()
    {
        if ($this->image_small->count()) {
            $imageName = $this->image_small->first()->hash_name ?: '';
        } else {
            $imageName = '';
        }

        return self::SMALL_IMAGE_PATH . $imageName;
    }
}
