<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Utilities\Traits\MultiLangs;

class ControlMenu extends \Eloquent
{
    use NodeTrait ,MultiLangs ,SoftDeletes;

    protected $with = ['page'];

    protected $fillable = ['id' ,'control_page_id' ,'parent_id' ,'url_path'];

    function page()
    {
        return $this->belongsTo(ControlPage::class ,'control_page_id');
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
