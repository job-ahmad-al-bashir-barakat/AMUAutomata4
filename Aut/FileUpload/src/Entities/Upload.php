<?php

namespace Aut\FileUpload\Entities;

use Aut\FileUpload\Entities\LangModels\FileAltLang;
use Modules\Utilities\Traits\MultiLangs;

use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

class Upload extends \Eloquent
{
    use SoftDeletes, MultiLangs;

    const FOLDER_STORAGE_PATH = 'upload/{type}/{folder}';

    protected $userFolder;

    protected $fillable = ['name', 'hash_name', 'ext', 'size', 'width', 'height', 'type', 'mime_type']; // , 'alt_en', 'alt_ar'

    protected $appends = ['image_url', 'file_url', 'url', 'lang_alt'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $user_has_folder = isset($this->fileLocalConfig['user_has_folder'])
            ? $this->fileLocalConfig['user_has_folder']
            : config('fileupload.user_has_folder');

        $user_field = config("fileupload.user_field");
        $user_field = new $user_field();
        $field      = $user_field->userField();

        $this->userFolder = $user_has_folder ? "/{$field}" : "";
    }

    private function getUrl()
    {
        $filePath = preg_replace('/{type}/',$this->type,self::FOLDER_STORAGE_PATH);

        return url(Storage::url("$filePath{$this->userFolder}/$this->hash_name"));
    }

    public function getImageUrlAttribute()
    {
        return $this->getUrl();
    }

    public function getFileUrlAttribute()
    {
        return $this->getUrl();
    }

    public function getUrlAttribute()
    {
        return $this->getUrl();
    }

     function transAlt() {

         return $this->hasMany(FileAltLang::class);
     }

     public function getLangAltAttribute()
     {
         return $this->transAlt->keyBy('lang_code');
     }
}
