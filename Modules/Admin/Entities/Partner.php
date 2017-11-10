<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\PartnerDescriptionLang;
use Modules\Admin\Entities\LangModels\PartnerNameLang;
use Modules\Utilities\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;

class Partner extends \Eloquent
{
    use MultiLangs,SoftDeletes;

    protected $fillable = ['contact_id'];

    protected $appends = ['lang_name','lang_description'];

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
}
