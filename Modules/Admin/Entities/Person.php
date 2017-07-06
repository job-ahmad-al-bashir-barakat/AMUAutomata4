<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Support\Str;

class Person extends \Eloquent
{
    use SoftDeletes ,MultiLangs;

    protected $table = 'persons';

    protected $fillable = ['type' ,'image_id' ,'gender_id' ,'position_id' ,'job_title_id' ,'contact_id'];

    protected $appends = ['lang_name'];

    protected $with = ['gender' ,'position' ,'jobTitle' ,'contact'];

    public function scopeType($query)
    {
        return $query->where('type', '=', Str::studly(\Route::input('model')));
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
}
