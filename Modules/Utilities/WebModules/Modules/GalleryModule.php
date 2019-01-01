<?php

namespace Modules\Utilities\WebModules\Modules;


use Aut\FileUpload\Entities\Image;
use Modules\Utilities\Entities\Icon;

class GalleryModule extends Module
{

    public $id = '10';

    public $code = 'gallery';

    public $viewName = 'gallery';

    public function getModuleData($data)
    {
        if ($data['images']) {
            $data['images'] = Image::whereIn('id', $data['images'])->get();
        }
        if ($data['icon']) {
            $data['icon'] = Icon::query()->whereIn('id', array_keys($data['icon'][0]))->get()->first();
        }

        return $data;
    }
}