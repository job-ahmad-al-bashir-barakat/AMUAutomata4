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

        'faculty-instructors' => [
            'model' => \Modules\Admin\Entities\Person::class,
            'view' => 'utilities::web-modules.modules.sub.persons-card-2',
            'func' => 'faculty_instructors',
            'var' => 'persons',
        ],

        'courses' => [
            'model' => \Modules\Admin\Entities\Course::class,
            'view' => 'utilities::web-modules.modules.sub.courses-card-2',
            'func' => 'courses',
            'var' => 'courses',
        ],

        'labs' => [
            'model' => \Modules\Admin\Entities\Lab::class,
            'view' => 'utilities::web-modules.modules.sub.labs-card-1',
            'func' => 'labs',
            'var' => 'labs',
        ],

        'offices' => [
            'model' => \Modules\Admin\Entities\UniversityOffice::class,
            'view' => 'utilities::web-modules.modules.sub.offices-card-1',
            'func' => 'offices',
            'var' => 'offices',
        ],

        'news' => [
            'model' => \Modules\Admin\Entities\News::class,
            'view' => 'utilities::web-modules.modules.sub.news-list-1',
            'func' => 'news',
            'var' => 'news',
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

    private function getQueryBuilderFacultyInstructors($model)
    {
        return $model::paginate(8);
    }

    private function getQueryBuilderCourses($model)
    {
        return $model::paginate(8);
    }

    private function getQueryBuilderLabs($model)
    {
        $facultyId = request('facultyId', false);
        if ($facultyId) {
            $model = $model::whereFacultyId($facultyId);
        }
        return $model->paginate(8);
    }

    private function getQueryBuilderOffices($model)
    {
        return $model::paginate(8);
    }

    private function getQueryBuilderNews($model)
    {
        return $model::orderBy('publish_date')->paginate(8);
    }
}
