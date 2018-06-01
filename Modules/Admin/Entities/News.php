<?php

namespace Modules\Admin\Entities;

use Modules\Utilities\Entities\User;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\NewsTitleLang;
use Modules\Admin\Entities\LangModels\NewsContentLang;
use Modules\Admin\Entities\LangModels\NewsDescriptionLang;


/**
 * Class News
 * @package Modules\Admin\Entities
 *
 */
class News extends \Eloquent
{
    use SoftDeletes ,MultiLangs/*, User*/;

    protected $fillable = ['user_id', 'status_id', 'reviewer_id', 'publish_date'];

    protected $appends = ['lang_title', 'lang_description', 'lang_content', 'slug', 'reviewed', 'reviewed_icon'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'publish_date'];

    public function transTitle()
    {
        return $this->hasMany(NewsTitleLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy("lang_code");
    }

    public function transDescription()
    {
        return $this->hasMany(NewsDescriptionLang::class);
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy("lang_code");
    }

    public function transContent()
    {
        return $this->hasMany(NewsContentLang::class);
    }

    public function getLangContentAttribute()
    {
        return $this->transContent->keyBy("lang_code");
    }

    public function getSlugAttribute()
    {
        return getSlug($this->id, $this->lang_title['en']->text);
    }

    public function getReviewedAttribute()
    {
        return (bool)$this->reviewer_id;
    }

    public function getReviewedIconAttribute()
    {
        return $this->reviewed ? 'fa fa-eye' : 'fa fa-eye-slash';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
