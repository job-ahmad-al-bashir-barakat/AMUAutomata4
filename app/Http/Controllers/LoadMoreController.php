<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoadMoreController extends Controller
{
    private $config = [
        'university-council' => [
            'model' => \Modules\Admin\Entities\Person::class,
            'view' => 'utilities::web-modules.modules.sub.persons-card-2',
            'func' => 'person',
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

    private function getQueryBuilderPerson($model)
    {
        return $model::where('type', '=', 'UniversityCouncil')->paginate(8);
    }
}
