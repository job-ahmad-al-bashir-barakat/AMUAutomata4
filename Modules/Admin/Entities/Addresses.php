<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\AddressLocationLangs;

class Addresses extends Model
{
    use SoftDeletes ,MultiLangs;

    protected $fillable = ['contact_id'];

    protected $appends = ['lang_location'];

    public function transLocation()
    {
        return $this->hasMany(AddressLocationLangs::class ,'address_id');
    }

    public function getLangLocationAttribute()
    {
        return $this->transLocation->keyBy('lang_code');
    }
}
