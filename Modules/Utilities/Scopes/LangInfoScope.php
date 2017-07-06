<?php
namespace Modules\Utilities\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class LangInfoScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $mainTable = $model->getTable();
        $leftTable = 'langs';
        $builder->leftJoin('langs','lang_id','=','langs.id');
        $builder->select(["{$mainTable}.*","{$leftTable}.lang_code", "{$leftTable}.name", "{$leftTable}.native", "{$leftTable}.is_default"]);
    }
}