<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\CourseBook;

class CourseBookFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = CourseBook::where('course_id', '=', $request->get('course'))
            ->with(['file'])
            ->allLangs();

        return $this->table
            ->queryConfig('datatable-course-books')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryCustomButton('upload_file', 'id', 'fa fa-file-pdf-o', '', 'onclick="showCourseBookFileUploadModal(this)"')
            ->queryMultiLang(['name'])
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-course-books', trans('admin::app.book'), ['gridSystem' => true, 'dialogWidth' => '70%'])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('course_id', 'course_id', $request->get('course'), false, true)
            ->addMultiInputTextLangs(['name'])
            ->addActionButton(trans('admin::app.upload_file'), 'upload_file', 'upload_file', 'center all', '60px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($CourseBook = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($CourseBook = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($CourseBook = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
