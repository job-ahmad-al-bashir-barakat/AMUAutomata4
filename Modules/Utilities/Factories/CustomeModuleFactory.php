<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;

class CustomeModuleFactory extends GlobalFactory
{
    /**
     *  get data-table query
     */
    public function getDatatable($model, $request)
    {
        $query = $model::with(['modules'])->allLangs()->get();

        return $this->table
            ->queryConfig('datatable-custom-modules')
            ->queryDatatable($query)
            ->queryMultiLang(['name'])
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryAddColumn('custom_module_temp' ,function ($item) {
                    // this property is just for test please use actual property
                    // from madel or db that represent actual html

                    //you can take html from relation and
                return "<textarea id='module-textarea-id' class='datatable-text-editor'>{ add your value here }</textarea>";
            })
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-custom-modules',trans('utilities::app.custom-modules'),['usedComponent' => true])
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addAutocomplete('autocomplete/modules' ,trans('utilities::app.modules'), 'module_id', "modules.lang_name.$this->lang.text", "modules.lang_name.$this->lang.text" ,'req required'/*,'onChange=""'*/)
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addComponent(view('utilities::page._custom_module')->renderSections()['component'] ,[
                ['selector' => '#custom-module-temp' , 'targetAttr' => 'html' ,'rowVal' => 'custom_module_temp']
            ])
            ->addBlade(view('utilities::page._custom_module')->renderSections()['script'])
            ->addNavButton()
            ->onUpdate('')
            //todo reset, init must be use the selector not an id EX: sets of text area for each supported language
            ->onModalOpen('<script>
                            APP_AMU.ckeditor.reset(\'\' ,\'\' ,\'single\' ,\'module-textarea-id\');
                            APP_AMU.ckeditor.init(\'body\' ,\'.datatable-text-editor\');
                           </script>')
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,$result = null)
    {
        //
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
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
