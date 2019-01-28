<?php

namespace Modules\Utilities\WebModules\Modules;


use Modules\Utilities\Entities\Link;

class LinkListModule extends Module
{
    public $id = '47';
    public $code = 'link_list';
    public $viewName = 'link-list';

    public function getModuleData($data)
    {
        $data['linkLists'] = Link::with(['icon'])->get();
        return $data;
    }
}