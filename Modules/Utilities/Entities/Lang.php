<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\Image;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lang extends Model
{
    use SoftDeletes;

    const IMAGE_PATH = 'storage/upload/image/langs/';

    protected $appends = ['image_path'];

    protected $fillable = ['lang_code', 'short_code', 'name', 'script', 'native', 'regional', 'is_default', 'image_id'];

    public function scopeWithoutLocal($query)
    {
        $local = app()->getLocale();
        return $query->where('lang_code', '<>', $local);
    }

    function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getImagePathAttribute()
    {
        if ($this->image) {
            $imageName = $this->image->hash_name ?: '';
        } else {
            $imageName = '';
        }

        return self::IMAGE_PATH . $imageName;
    }
}
