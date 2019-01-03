<?php

namespace Modules\Utilities\WebModules\Modules;

use Modules\Admin\Entities\News;
class LatestNewsModule extends Module
{

    public $id = '39';

    public $code = 'latest_news';

    public $viewName = 'latest-news';

    public function getModuleData($data)
    {
        $limit = $data['show'] ?? 8;
        $data['news'] = News::orderBy('publish_date', 'desc')->take($limit)->get();
        return $data;
    }
}