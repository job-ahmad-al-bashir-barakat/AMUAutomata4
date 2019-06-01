<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\UniversityOfficeNameLang;

class UniversityOffice extends Model
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

    protected $fillable = ['person_id' ,'contact_id', 'image_id'];

    protected $appends = ['lang_name', 'image_path'];

    protected static function boot() {

        parent::boot();

        static::deleting(function($universityOffice) {

            foreach ($universityOffice->contact()->get() as $contact)
            {
                foreach ($contact->phoneNumbers()->get() as $phoneNumber)
                    $phoneNumber->delete();

                foreach ($contact->addresses()->get() as $address)
                    $address->delete();
            }

            $universityOffice->contact()->delete();
        });
    }

    public function transName()
    {
        return $this->hasMany(UniversityOfficeNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy("lang_code");
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    function image()
    {
        return $this->belongsTo(Image::class);
    }

    function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function getImagePathAttribute()
    {
        $path = null;

        if ($this->image) {
            $path = self::IMAGE_PATH . 'university-offices/' . $this->image->hash_name;
        }

        return $path;
    }
}
