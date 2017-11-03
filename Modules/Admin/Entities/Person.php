<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
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

    protected $table = 'persons';

    protected $fillable = ['type' ,'image_id' ,'gender_id' ,'position_id' ,'job_title_id' ,'contact_id'];

    protected $appends = ['lang_name' ,'lang_summary', 'image_path'];

    protected $with = ['gender' ,'position' ,'jobTitle' ,'contact', 'image'];

    public function scopeType($query)
    {
        return $query->where('type', '=', Str::snake(\Route::input('model')));
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

    function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            $imageName = $this->image->hash_name ?: '';
        } else {
            $imageName = '';
        }
        return self::IMAGE_PATH . $imageName;
    }
}
