<?php

namespace Modules\Utilities\WebModules\Modules;

class VideoModule extends Module
{

    public $id = '53';

    public $code = 'video';

    public $viewName = 'video';

    public function getModuleData($data)
    {
        $data = parent::getModuleData($data);

        $data['video']->load('file');

        $data['videoFile'] = $data['video']->file->first();

        return $data;
    }
}