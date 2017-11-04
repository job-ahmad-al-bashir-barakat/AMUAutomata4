<?php

namespace Modules\Admin\Entities;

use Modules\Utilities\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\LabNameLang;
use Modules\Admin\Entities\LangModels\LabDescriptionLang;

class Lab extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['faculty_id' ,'contact_id'];

    protected $appends = ['lang_name','lang_description'];

    protected static function boot() {

        parent::boot();

        static::deleting(function($lab) {

            $lab->image()->sync([]);

            $lab->contact()->delete();
        });
    }


    public function transName()
    {
        return $this->hasMany(LabNameLang::class);
    }
    
    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }
    
    public function transDescription()
    {
        return $this->hasMany(LabDescriptionLang::class);
    }
    
    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy("lang_code");
    }

    /*
    * relation
    */
    function factory()
    {
        return $this->belongsTo(Faculty::class);
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    function image()
    {
        return $this->belongsToMany(Image::class);
    }
}
