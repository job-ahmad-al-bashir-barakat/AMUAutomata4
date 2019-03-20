<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class BookFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = $model::allLangs()->with(['image', 'author', 'file']);

        return $this->table
            ->queryConfig('datatable-books')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', 'onclick="showImageUploadModal(this)"')
            ->queryCustomButton('upload_file', 'id', 'fa fa-file', '', 'onclick="showFileUploadModal(this)"')
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-books' ,trans('admin::app.books'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'], 'req required')
            ->addInputText(trans('app.isbn'), 'isbn', 'isbn')
            ->addAutocomplete('autocomplete/authors', trans('app.author'), 'author_id', 'author.transName.text', "author.lang_name.$this->lang.text")
            ->addActionButton(trans('admin::app.upload_image'), 'upload_image', 'upload_image', 'center all', '60px')
            ->addActionButton(trans('admin::app.upload_file'), 'upload_file', 'upload_file', 'center all', '60px')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }


    /**
     *  store action for save relation
     */
    public function storeDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($Branch = null, $request = null, $result = null)
    {
        //
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($Branch = null, $request = null, $result = null)
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
