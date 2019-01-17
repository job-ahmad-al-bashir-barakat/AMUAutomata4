<?php

namespace Modules\Utilities\WebModules\Modules;


class GalleriesModule extends Module
{
    public $id = '30';
    public $code = 'galleries';
    public $viewName = 'galleries';

    public function getModuleData($data)
    {
        $data['image_limit'] = $data['image_limit'] ?? '';
        $imageLimits = explode(',', $data['image_limit']);

        if ($data['galleries']) {
            foreach ($data['galleries'] as $i => $gallery) {
                $limit = $imageLimits[$i] ?? false;
                $data['galleries'][$i]->load(['image' => function ($query) use ($limit) {
                    if ($limit) {
                        $query->limit($limit);
                    }
                }]);
            }
        }
        return $data;
    }
}