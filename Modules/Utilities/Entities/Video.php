<?php

namespace Modules\Utilities\Entities;

use Aut\Eloquent\Models\Model;
use Aut\FileUpload\Entities\File;
use Modules\Utilities\Traits\MultiLangs;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Utilities\Entities\LangModels\VideoNameLang;

class Video extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['file_id'];

    protected $appends = ['lang_name'];

    public function transName()
    {
        return $this->hasMany(VideoNameLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function file()
    {
        return $this->belongsToMany(File::class, 'video_file');
    }
}
