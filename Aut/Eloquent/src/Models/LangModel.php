<?php

namespace Aut\Eloquent\Models;

use Modules\Utilities\Traits\LangInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Aut\Eloquent\Collections\LangModelCollection;

abstract class LangModel extends Model
{
    use SoftDeletes, LangInfo;

    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array $models
     * @return LangModelCollection
     */
    public function newCollection(array $models = [])
    {
        return new LangModelCollection($models);
    }
}