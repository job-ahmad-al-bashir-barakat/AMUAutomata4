<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\SocialNetwork;

class Contact extends \Eloquent
{
    use SoftDeletes;

    protected $fillable = ['email' ,'phone' ,'mobile' ,'fax' ,'gelocation'];

    protected $with = ['socialNetwork'];

    protected $appends = ['social'];

    function socialNetwork()
    {
        return $this->belongsToMany(SocialNetwork::class)->withPivot(['url']);
    }

    function getSocialAttribute()
    {
        return $this->socialNetwork->keyBy('code');
    }
}
