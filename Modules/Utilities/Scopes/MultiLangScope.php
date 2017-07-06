<?php

namespace Modules\Utilities\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class MultiLangScope implements Scope
{

    const EAGER = 'E';
    const JOIN = 'J';

    protected $loadType;

    private $transScopes = [];

    /**
     * All of the extensions to be added to the builder.
     *
     * @var array
     */
    protected $extensions = ['Translated', 'WithoutTrans', 'AllLangs'];

    protected function getLangCode($langCode = '')
    {
        // return langcode or the default
        return 1;//app()->getLocale();
    }

    /**
     * @param Model $model
     * @return array
     */
    private function setTransScopes(Model $model)
    {
        $classMethods = get_class_methods($model);
        $transMethods = preg_grep('/^trans/', $classMethods);
        $this->transScopes = $transMethods;
    }

    private function getEagerLoad($currentLangCode = false, $where = [])
    {
        $with = [];
        $langCode = $currentLangCode;//? : $this->getLangCode();
        foreach ($this->transScopes as $transScope) {
            $clouser = array_get($where, $transScope, null);
            $with[$transScope] = function ($query) use ($langCode, $clouser) {
                if($langCode)
                {
                    $query->where('lang_id', '=', $langCode);
                }
                if ($clouser && $clouser instanceof \Closure)
                {
                    call_user_func($clouser, $query);
                }
            };
        }
        return $with;
    }

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $this->setTransScopes($model);

        $langCode = $this->getLangCode();

        $with = $this->getEagerLoad($langCode);

        $builder->with($with);
    }

    public function extend(Builder $builder)
    {
        foreach ($this->extensions as $extension) {
            $this->{"add{$extension}"}($builder);
        }
    }

    /**
     * Scope a query to Retrieve just the current trans.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function addTranslated(Builder $builder)
    {
        $builder->macro('translated', function (Builder $builder, $langCode, $where = []) {
            $builder->withoutGlobalScopes([MultiLangScope::class]);

            $model = $builder->getModel();

            $this->setTransScopes($model);

            $lang = $langCode? : $this->getLangCode();

            $with = $this->getEagerLoad($lang, $where);

            return $builder->with($with);
        });
    }

    public function addAllLangs(Builder $builder)
    {
        $builder->macro('allLangs', function (Builder $builder, $where = []) {
            $builder->withoutGlobalScopes([MultiLangScope::class]);
            $model = $builder->getModel();

            $this->setTransScopes($model);

            $with = $this->getEagerLoad(false, $where);

            return $builder->with($with);
        });
    }

    public function addWithoutTrans(Builder $builder)
    {
        $builder->macro('withoutTrans', function (Builder $builder) {
            return $builder->withoutGlobalScopes([MultiLangScope::class]);
        });
    }

}