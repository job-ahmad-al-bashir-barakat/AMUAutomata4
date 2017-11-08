<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadMoreController extends Controller
{
    private $config = [
        'university-council' => [
            'model' => \Modules\Admin\Entities\Person::class,
            'view' => 'utilities::web-modules.modules.sub.persons-card-2',
            'func' => 'university_council',
            'var' => 'persons',
        ],
        'trusted-council' => [
            'model' => \Modules\Admin\Entities\Person::class,
            'view' => 'utilities::web-modules.modules.sub.persons-card-2',
            'func' => 'trusted_council',
            'var' => 'persons',
        ],
    ];

    public function getHtml(Request $request, $class)
    {
        $config = $this->config[$class];
        $model = $config['model'];
        $func =  "getQueryBuilder" . studly_case($config['func']);
        $view = $config['view'];
        $var = $config['var'];
        $data = call_user_func_array([$this, $func], [$model]);
        return view($view, [$var => $data]);
    }

    private function getQueryBuilderUniversityCouncil($model)
    {
        return $model::where('type', '=', 'UniversityCouncil')->paginate(8);
    }

    private function getQueryBuilderTrustedCouncil($model)
    {
        return $model::where('type', '=', 'TrustedCouncil')->paginate(8);
    }
}