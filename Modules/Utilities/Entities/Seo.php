<?php

namespace Modules\Utilities\Entities;

use Modules\Utilities\Entities\LangModels\SeoArticleSectionLang;
use Modules\Utilities\Entities\LangModels\SeoArticleTagLang;
use Modules\Utilities\Entities\LangModels\SeoBookTagLang;
use Modules\Utilities\Entities\LangModels\SeoProfileFirstNameLang;
use Modules\Utilities\Entities\LangModels\SeoProfileLastNameLang;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\SeoTitleLang;
use Modules\Utilities\Entities\LangModels\SeoKeywordLang;
use Modules\Utilities\Entities\LangModels\SeoDescriptionLang;

class Seo extends \Eloquent
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/graph_images/';

    protected $fillable = [
        'graph_type',
        'graph_image_id',
        'article_published_time',
        'article_modified_time',
        'article_expiration_time',
        'profile_username',
        'profile_gender',
        'book_isbn',
        'book_release_date',
        'card_image_id',
        'buildable_id',
        'buildable_type',
        'optional_id',
    ];

    protected $appends  = [
        'lang_title',
        'lang_description',
        'lang_keyword',
        'lang_profile_first_name',
        'lang_profile_last_name',
        'lang_article_section',
        'lang_article_tag',
        'lang_book_tag',
        'image_path',
    ];

    public function scopePageSeo($query, $page = false)
    {
        if ($page) {
            list($buildableType, $buildableId, $optionalId) = explode('.', $page);
        } else {
            $route = request()->route();
            list($buildableType, $buildableId, $optionalId) = explode('.', $route->getName());
        }

        $query->whereBuildableId($buildableId)->whereBuildableType($buildableType);
        if ($optionalId) {
            $query->whereOptionalId($optionalId);
        } else {
            $query->whereNull('optional_id');
        }
        return $query;
    }

    public function buildable()
    {
        return $this->morphTo();
    }

    public function transTitle()
    {
        return $this->hasMany(SeoTitleLang::class);
    }

    public function transDescription()
    {
        return $this->hasMany(SeoDescriptionLang::class);
    }

    public function transKeyword()
    {
        return $this->hasMany(SeoKeywordLang::class);
    }

    public function transProfileFirstName()
    {
        return $this->hasMany(SeoProfileFirstNameLang::class);
    }

    public function transProfileLastName()
    {
        return $this->hasMany(SeoProfileLastNameLang::class);
    }

    public function transArticleSection()
    {
        return $this->hasMany(SeoArticleSectionLang::class);
    }

    public function transArticleTag()
    {
        return $this->hasMany(SeoArticleTagLang::class);
    }

    public function transBookTag()
    {
        return $this->hasMany(SeoBookTagLang::class);
    }

    public function getLangTitleAttribute()
    {
        return $this->transTitle->keyBy('lang_code');
    }

    public function getLangDescriptionAttribute()
    {
        return $this->transDescription->keyBy('lang_code');
    }

    public function getLangKeywordAttribute()
    {
        return $this->transKeyword->keyBy('lang_code');
    }

    public function getLangProfileFirstNameAttribute()
    {
        return $this->transProfileFirstName->keyBy('lang_code');
    }

    public function getLangProfileLastNameAttribute()
    {
        return $this->transProfileLastName->keyBy('lang_code');
    }

    public function getLangArticleSectionAttribute()
    {
        return $this->transArticleSection->keyBy('lang_code');
    }

    public function getLangArticleTagAttribute()
    {
        return $this->transArticleTag->keyBy('lang_code');
    }

    public function getLangBookTagAttribute()
    {
        return $this->transBookTag->keyBy('lang_code');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'graph_image_id');
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
