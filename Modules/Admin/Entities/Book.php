<?php

namespace Modules\Admin\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\File;
use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\BookNameLang;

class Book extends Model
{
    use SoftDeletes ,MultiLangs;

    const IMAGE_PATH = 'storage/upload/image/';
    const FILE_PATH = 'storage/upload/';

    protected $fillable = ['author_id', 'isbn', 'image_id', 'file_id'];

    protected $appends = ['lang_name', 'image_path', 'file_path'];

    public function transName()
    {
        return $this->hasMany(BookNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function author()
    {
        return $this->belongsTo(Person::class, 'author_id')->where('type', 'author');
    }

    public function getImagePathAttribute()
    {
        if (!$this->image) {
            return '';
        }
        return  self::IMAGE_PATH . 'book_covers/' . $this->image->hash_name;
    }

    public function getFilePathAttribute()
    {
        if (!$this->file) {
            return '';
        }
        return  self::FILE_PATH . 'pdf/books/' . $this->file->hash_name;
    }
}
