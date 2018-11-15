<?php

namespace Aut\SeoBuilder;


use Aut\SeoBuilder\Entities\Seo;
use Arcanedev\SeoHelper\SeoHelper;
use Modules\Utilities\Entities\Lang;
use Arcanedev\SeoHelper\Helpers\Meta;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SeoBuilder
{

    public
        $graphTypes,
        $cardTypes,
        $lang,
        $locale,
        $localesAlternate;

    protected
        $seoHelper,
        $seo;

    public function __construct(SeoHelper $seoHelper, Seo $seo = null)
    {
        $this->seoHelper = $seoHelper;
        $this->seo = $seo;

        $this->lang = app()->getLocale();
        $this->locale = LaravelLocalization::getCurrentLocaleRegional();
        $this->localesAlternate = Lang::withoutLocal()->get()->pluck('regional');

        $this->graphTypes = config('seo-builder.graph_types');
        $this->cardTypes = config('seo-builder.card_types');

        $this->initDefault();
    }

    protected function initDefault()
    {

    }

    public function renderSeoTags()
    {
        $this->seoHelper->setSiteName(setting('website_title')->value);
        $this->seoHelper->meta()->addMeta('robots', 'index, follow');
        $this->seoHelper->setTitle($this->seo->lang_title[$this->lang]->text??'ASPU');
        $this->seoHelper->setKeywords($this->seo->lang_keyword[$this->lang]->text??'amu, university, andalus university');
        $this->seoHelper->setDescription($this->seo->lang_description[$this->lang]->text??setting('website_title')->value);

        $this->seoHelper->og()->setType($this->seo->graph_type??'website');
        $this->seoHelper->og()->setUrl(request()->url());
        $this->seoHelper->og()->addProperty('local', $this->locale);
        foreach ($this->localesAlternate as $alternate) {
            $this->seoHelper->og()->addProperty('locale:alternate', $alternate);
        }
        if ($this->seo && $this->seo->graph_image_path) {
            $this->seoHelper->og()->addProperty('image', asset($this->seo->graph_image_path));
            $this->seoHelper->og()->addProperty('image:alt', $this->seo->graphImage->lang_alt[$this->lang]->text);
            $this->seoHelper->og()->addProperty('image:type', $this->seo->graphImage->ext);
            $this->seoHelper->og()->addProperty('image:width', $this->seo->graphImage->width);
            $this->seoHelper->og()->addProperty('image:height', $this->seo->graphImage->height);
        }
        $this->renderGraphInputs($this->getGraphAttributes($this->seo->graph_type??'website'));

        $this->seoHelper->twitter()->setType($this->seo->card_type??'summary');
        $this->seoHelper->twitter()->setTitle($this->seo->lang_title[$this->lang]->text??'ASPU');
        $this->seoHelper->twitter()->setDescription($this->seo->lang_description[$this->lang]->text??setting('website_title')->value);
        $this->seoHelper->twitter()->setSite(setting('website_title')->value);

        if ($this->seo && $this->seo->card_image_path) {
            $this->seoHelper->twitter()->addMeta('image', asset($this->seo->card_image_path));
            $this->seoHelper->twitter()->addMeta('image:alt', $this->seo->cardImage->lang_alt[$this->lang]->text);
            $this->seoHelper->twitter()->addMeta('image:width', $this->seo->cardImage->width);
            $this->seoHelper->twitter()->addMeta('image:height', $this->seo->cardImage->height);
        }


        $extraHtml = Meta::make('content-type', 'text/html; charset=UTF-8', 'http-equiv')->render();
        $extraHtml .= "\r\n<meta name='author' content='automata4 group' />";
        return "{$extraHtml}\r\n{$this->seoHelper->render()}";

        /*$card = "
            <meta name='twitter:creator' content='' />
            <meta name='twitter:site:id' content='' />
            <meta name='twitter:creator:id' content='' />
        ";*/
    }

    protected function renderGraphInputs($inputs)
    {
        foreach ($inputs as $code => $input) {
            if (!is_array($input) && $input) {
                $this->renderGraphInputs($this->getGraphAttributes($input));
                continue;
            }
            if ($input['multi_lang']) {
                $content = $this->seo->{"lang_{$input['name']}"}[$this->lang]->text;
            } else{
                $content = $this->seo->{$input['name']};
            }
            $this->seoHelper->og()->addProperty($code, $content);
        }
    }

    public function getGraphTypesTrans()
    {
        return trans('seo_builder::seo-builder.graph_types');
    }

    public function getCardTypesTrans()
    {
        return trans('seo_builder::seo-builder.card_types');
    }

    public function getGraphTypes()
    {
        return $this->graphTypes;
    }

    public function getCardTypes()
    {
        return $this->cardTypes;
    }

    public function getGraphAttributes($graphType)
    {
        return config("seo-builder.attributes.{$graphType}") ?: [];
    }

    public function getOptions($options = [])
    {
        $result = [];
        foreach ($options as $option) {
            $result[$option] = trans("seo_builder::seo-builder.options.{$option}");
        }
        return $result;
    }
}