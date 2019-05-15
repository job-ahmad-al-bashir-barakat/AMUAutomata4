<?php

namespace Modules\Utilities\WebModules\Modules;


use Illuminate\Pagination\LengthAwarePaginator;

class GalleriesModule extends Module
{
    public $id = '30';
    public $code = 'galleries';
    public $viewName = 'galleries';

    public function getModuleData($data)
    {
        $total = 0;
        $data['image_limit'] = $data['image_limit'] ?? '';
        $imageLimits = explode(',', $data['image_limit']);

        if ($data['galleries']) {
            foreach ($data['galleries'] as $i => $gallery) {
                $limit = $imageLimits[$i] ?? false;
                $data['galleries'][$i]->load(['image' => function ($query) use ($limit) {
                    if ($limit) {
                        $query->limit($limit);
                    }
                    $query->orderBy('created_at', 'desc');
                }]);
                $total = $total + $data['galleries'][$i]->image->count();
            }
        }
        $paginator = new LengthAwarePaginator([], $total, 12);
        $data['total'] = $paginator;
        return $data;
    }
}
