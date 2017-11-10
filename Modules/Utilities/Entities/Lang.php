<?php

namespace Modules\Utilities\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;

class Lang extends \Eloquent
{
    use SoftDeletes;

    const IMAGE_PATH = 'storage/upload/image/langs/';

    protected $appends = ['image_path'];

    protected $fillable = ['lang_code', 'short_code', 'name', 'script', 'native', 'regional', 'is_default', 'image_id'];

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
