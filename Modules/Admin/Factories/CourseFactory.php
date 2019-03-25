<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Faculty;

class CourseFactory extends GlobalFactory
{
    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = Course::where('faculty_id', '=', $request->get('id'))->with(['department', 'degree', 'image_265', 'image_750'])->allLangs();

        return $this->table
            ->queryConfig('datatable-course')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('btn-prerequisite', 'id', 'fa fa-cubes', 'btn-prerequisite', "href='javascript:void(0);' onclick='prerequisiteModal(this)' data-parent=" . $request->get('id'))
            ->queryCustomButton('btn-course-books', 'id', 'fa fa-book', 'btn-course-books', "href='javascript:void(0);' onclick='courseBooksModal(this)'")
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showFileUploadModal(this)"')
            ->queryMultiLang(['name', 'description', 'content'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        $facultyId = $request->get('id');

        return $this->table
            ->config('datatable-course', trans('admin::app.course'), ['gridSystem' => true, 'dialogWidth' => '70%'])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('faculty_id', 'faculty_id', $facultyId, false, true)
            ->addAutocomplete('autocomplete/department', trans('admin::app.department'), "department_id", 'department.lang_name.' . $this->lang . '.text', 'department.lang_name.' . $this->lang . '.text', 'req required', ['data-remote-param' => 'faculty=' . $facultyId])
            ->addAutocomplete('autocomplete/degree', trans('admin::app.degree'), "degree_id", 'degree.lang_name.' . $this->lang . '.text', 'degree.lang_name.' . $this->lang . '.text', '', ['data-remote-param' => 'faculty=' . $facultyId])
            ->addMultiInputTextLangs(['name'])
            ->addMultiTextareaLangs(['description'], 'none', '', '', true, false, false, false, false)
            ->addInputText(trans('admin::app.code'), 'code', 'code', 'req required')
            ->addInputNumber(trans('admin::app.credit'), 'credit', 'credit', 'req required')
            ->setGridNormalCol(12)
            ->addMultiTextareaLangs(['content'], 'text-editor d:tabs d:noLabel none')
            ->addActionButton(trans('admin::app.prerequisite'), 'btn-prerequisite', 'btn-prerequisite', 'center all', '80px')
            ->addActionButton(trans('admin::app.books'), 'btn-course-books', 'btn-course-books', 'center all', '80px')
            ->addActionButton(trans('admin::app.upload_image'), 'upload_image', 'upload_image', 'center all', '60px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        $id = request('id');

        $put = "";
        if (request()->method() == 'PUT')
            $put = ",code,$id,id";

        return [
            'code' => "required|unique:courses$put"
        ];
    }
}
