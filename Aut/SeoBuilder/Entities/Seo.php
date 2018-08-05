<?php

namespace Aut\SeoBuilder\Entities;

use Aut\SeoBuilder\Entities\LangModels\SeoArticleSectionLang;
use Aut\SeoBuilder\Entities\LangModels\SeoProfileFirstNameLang;
use Aut\SeoBuilder\Entities\LangModels\SeoProfileLastNameLang;
use Aut\SeoBuilder\Entities\LangModels\SeoDescriptionLang;
use Aut\SeoBuilder\Entities\LangModels\SeoArticleTagLang;
use Aut\SeoBuilder\Entities\LangModels\SeoBookTagLang;
use Aut\SeoBuilder\Entities\LangModels\SeoKeywordLang;
use Aut\SeoBuilder\Entities\LangModels\SeoTitleLang;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Traits\MultiLangs;
use Aut\FileUpload\Entities\Image;

class Seo extends \Eloquent
{
    use SoftDeletes, MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';

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
        'card_type',
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
        'graph_image_path',
        'card_image_path',
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

    public function graphImage()
    {
        return $this->belongsTo(Image::class, 'graph_image_id');
    }

    public function cardImage()
    {
        return $this->belongsTo(Image::class, 'card_image_id');
    }

    public function getGraphImagePathAttribute()
    {
        if ($this->graphImage) {
            $imageName = $this->graphImage->hash_name ?: '';
        } else {
            return '';
            $imageName = '';
        }
        return self::IMAGE_PATH . "graph_images/" . $imageName;
    }

    public function getCardImagePathAttribute()
    {
        if ($this->cardImage) {
            $imageName = $this->cardImage->hash_name ?: '';
        } else {
            return '';
            $imageName = '';
        }
        return self::IMAGE_PATH . "card_images/" . $imageName;
    }
}
