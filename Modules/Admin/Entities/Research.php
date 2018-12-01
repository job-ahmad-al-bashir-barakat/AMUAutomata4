<?php

namespace Modules\Admin\Entities;

use Aut\FileUpload\Entities\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\LangModels\ResearchJournalLang;
use Modules\Admin\Entities\LangModels\ResearchNameLang;
use Modules\Utilities\Traits\MultiLangs;

class Research extends Model
{
    use SoftDeletes, MultiLangs;

    protected $fillable = ['url', 'person_id'];

    protected $appends = ['lang_name', 'lang_journal'];

    public function transName()
    {
        return $this->hasMany(ResearchNameLang::class);
    }

    public function transJournal()
    {
        return $this->hasMany(ResearchJournalLang::class);
    }

    public function getLangNameAttribute()
    {
        return $this->transName->keyBy('lang_code');
    }

    public function getLangJournalAttribute()
    {
        return $this->transJournal->keyBy('lang_code');
    }

    function file()
    {
        return $this->belongsTo(File::class);
    }
}
