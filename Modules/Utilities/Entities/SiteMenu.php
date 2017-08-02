<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Utilities\Traits\MultiLangs;

class SiteMenu extends Model
{
    use NodeTrait ,MultiLangs ,SoftDeletes;

    protected $with = ['page'];

    protected $fillable = ['id' ,'page_id' ,'parent_id' ,'order'];

    function page()
    {
        return $this->belongsTo(Page::class ,'page_id');
    }

    // this is a recommended way to declare event handlers
    protected static function boot() {

        parent::boot();

        //before delete() method call this
        static::deleting(function($node) {

            $node->page()->delete();
        });
    }
}
