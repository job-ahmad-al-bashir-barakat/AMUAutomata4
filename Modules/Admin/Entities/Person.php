<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Modules\Admin\Entities\LangModels\PersonExperienceLang;
use Modules\Admin\Entities\LangModels\PersonNameLang;
use Modules\Admin\Entities\LangModels\PersonSummaryLang;
use Modules\Utilities\Entities\Gender;
use Modules\Utilities\Entities\Image;
use Modules\Utilities\Entities\JobTitle;
use Modules\Utilities\Entities\Position;
use Modules\Utilities\Traits\MultiLangs;

class Person extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/people/';

    const PERSON_UNIVERSITY_COUNCIL = 'university-council';
    const PERSON_BOARD_OF_TRUSTEES  = 'board-of-trustees';
    const PERSON_STAFF              = 'staff';

    protected $fillable = ['type' ,'image_260_id','image_360_id' ,'gender_id' ,'position_id' ,'job_title_id' ,'contact_id', 'faculty_id'];

    protected $appends = ['lang_name' ,'lang_summary', 'lang_experience', 'image_path'];

    protected $with = ['gender', 'position', 'jobTitle', 'contact.socialNetwork', 'image_260', 'image_360', 'faculty'];

    protected static function boot() {

        parent::boot();

        //before delete() method call this
        static::deleting(function($person) {

            foreach ($person->contact()->get() as $contact)
            {
                $contact->socialNetwork()->sync([]);
            }

            $person->contact->delete();
        });
    }

    public function scopeType($query)
    {
        return $query->where('type', '=', Str::snake(\Route::input('model')));
    }

    public function scopeUniversityCouncil($query)
    {
        return $query->where('type', '=', self::PERSON_UNIVERSITY_COUNCIL);
    }

    public function scopeBoardOfTrustees($query)
    {
        return $query->where('type', '=', self::PERSON_BOARD_OF_TRUSTEES);
    }

    public function scopeStaff($query)
    {
        return $query->where('type', '=', self::PERSON_STAFF);
    }

    /*
     * translate
     */
    public function transName()
    {
        return $this->hasMany(PersonNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function transSummary()
    {
        return $this->hasMany(PersonSummaryLang::class);
    }

    public function getLangSummaryAttribute()
    {
        return $this->transSummary->keyBy('lang_code');
    }


    public function transExperience()
    {
        return $this->hasMany(PersonExperienceLang::class);
    }

    public function getLangExperienceAttribute()
    {
        return $this->transExperience->keyBy('lang_code');
    }

    /*
     * relation
     */
    function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    function position()
    {
        return $this->belongsTo(Position::class);
    }

    function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    function image_260()
    {
        return $this->belongsTo(Image::class);
    }

    function image_360()
    {
        return $this->belongsTo(Image::class);
    }

    public function getImagePathAttribute()
    {
        $paths = [
            'sm' => '',
            'lg' => '',
        ];
        if ($this->image_260) {
            $paths['sm'] = self::IMAGE_PATH . 'person_sm/' . $this->image_260->hash_name;
        }
        if ($this->image_360) {
            $paths['lg'] = self::IMAGE_PATH . 'person_lg/' . $this->image_360->hash_name;
        }
        return $paths;
    }
}
