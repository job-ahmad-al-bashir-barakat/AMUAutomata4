<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\UniversityOfficeNameLang;

class UniversityOffice extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['person_id' ,'contact_id'];

    protected $appends = ['lang_name'];

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

    function person()
    {
        return $this->belongsTo(Person::class);
    }
}
