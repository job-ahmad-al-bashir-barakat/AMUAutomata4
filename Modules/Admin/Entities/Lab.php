<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\LabNameLang;
use Modules\Admin\Entities\LangModels\LabDescriptionLang;

class Lab extends Model
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['faculty_id' ,'contact_id','image_id'];

    protected $appends = ['lang_name','lang_description', 'main_image_path', 'images_path'];

    protected $with = ['mainImage'];

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

    function mainImage()
    {
        return $this->belongsTo(Image::class,'image_id');
    }

    public function getMainImagePathAttribute()
    {
        $path = '';
        if ($this->mainImage) {
            $path = self::IMAGE_PATH . 'main-labs/' . $this->mainImage->hash_name;
        }
        return $path;
    }

    function image()
    {
        return $this->belongsToMany(Image::class);
    }

    public function getImagesPathAttribute()
    {
        $paths = [];
        if ($this->image) {
            foreach ($this->image as $image) {
                $paths[] = self::IMAGE_PATH . 'labs/' . $image->hash_name;
            }
        }
        return $paths;
    }
}
