<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\StatusNameLang;

/**
 * Class Status
 * @package Modules\Admin\Entities
 * @method static pendingReview
 */
class Status extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(StatusNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function scopeDraft($query)
    {
        return $query->whereId('1')->first();
    }

    public function scopePendingReview($query)
    {
        return $query->whereId('2')->first();
    }

    public function scopeReviewed($query)
    {
        return $query->whereId('3')->first();
    }
}
