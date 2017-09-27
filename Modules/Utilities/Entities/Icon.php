<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{
    use SoftDeletes;

    protected $fillable = ['code'];

    protected $appends = ['icon_html'];

    /*public function getCodeAttribute($value)
    {
        return "<i class='{$value}'> {$value}</i>";
    }*/

    public function getIconHtmlAttribute()
    {
        return "<i class='{$this->code}'> {$this->code}</i>";
    }
}
