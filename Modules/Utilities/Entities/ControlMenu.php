<?php

namespace Modules\Utilities\Entities;

use Kalnoy\Nestedset\NodeTrait;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;

class ControlMenu extends \Eloquent
{
    use NodeTrait, MultiLangs, SoftDeletes;

    protected $with = ['page'];

    protected $fillable = ['id', 'control_page_id', 'parent_id', 'url_path', 'order'];

    protected $appends = ['url_path_replace'];

    function page()
    {
        return $this->belongsTo(ControlPage::class, 'control_page_id');
    }

    function getUrlPathReplaceAttribute($value)
    {
        $params = request()->route()->parameters();

        return replaceParamWithValue($this->url_path, $params);
    }

    // this is a recommended way to declare event handlers
    protected static function boot()
    {

        parent::boot();

        //before delete() method call this
        static::deleting(function ($node) {

            $node->page()->delete();
        });
    }
}
