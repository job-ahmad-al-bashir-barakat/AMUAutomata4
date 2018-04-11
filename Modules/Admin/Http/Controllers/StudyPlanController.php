<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Semester;

class StudyPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::page.study_plan');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        if(request()->ajax())
        {
            $courses = Course::where('faculty_id' ,'=' ,request()->get('faculty'));

            if(request()->get('degree'))
                $courses->where('degree_id','=' ,request()->get('degree'));

            $courses = $courses->get();

            $studyPlan = view('admin::page._study_plan' ,[
                'semesters'        => Semester::all(),
                'courses'          => $courses->filter(function ($item){
                    return $item->semester_id == null;
                }),
                'semester_courses' => $courses->filter(function ($item) {
                    return $item->semester_id != null && $item->faculty_study_year_id == request()->get('study-year');
                })->groupBy('semester_id'),
                'studyYear' => request()->input('study-year')
            ])->render();

            return \response()->json(['study_plan' => $studyPlan]);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($request->input('delete' , []))
            foreach ($request->input('delete') as $course_id) {

                Course::where('id' ,'=' ,$course_id)->update([
                    'semester_id' => null,
                    'faculty_study_year_id' => null,
                ]);
            }

        if($request->input('study-plan' , []))
            foreach ($request->input('study-plan') as $course_id => $updateAttr) {

                Course::where('id' ,'=' ,$course_id)->update($updateAttr);
            }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
