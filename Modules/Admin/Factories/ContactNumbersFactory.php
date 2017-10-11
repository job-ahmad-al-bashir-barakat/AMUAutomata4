<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\Contact;
use Modules\Admin\Entities\PhoneNumbers;

class ContactNumbersFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model, $request)
    {
        $query = Contact::findOrFail(request()->get('id'))->first()->phoneNumbers;

        return $this->table
            ->queryConfig('datatable-phone-numbers')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryAddColumn('type_selected' ,function ($item) {
                switch ($item->type) {
                    case 'P' : return trans('admin::app.phone'); break;
                    case 'M' : return trans('admin::app.mobile'); break;
                    case 'F' : return trans('admin::app.fax'); break;
                }
            })
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model, $request)
    {
        return $this->table
            ->config('datatable-phone-numbers',trans('admin::app.numbers'))
            ->addPrimaryKey('id','id')
            ->addHiddenInput('contact_id','contact_id' ,$request->get('id') ,false ,true)
            ->addInputText(trans('admin::app.number') ,'number' ,'number' ,'req required' ,['data-masked' , 'data-inputmask-type' => "phone"])
            ->addSelect(['P' => ['title' =>  trans('admin::app.phone') ,'selected' => true] ,'M' => trans('admin::app.mobile') ,'F' => trans('admin::app.fax')] ,trans('admin::app.type') ,'type' ,'type' ,'type_selected' ,'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->onTableCreate("<script>

                  $(document).off('change').on('change' ,'#type' ,function () {
                
                        var _number = $(this).closest('form').find('#number');
                        
                        switch ($(this).val()) {
                            
                            case 'P' : {
                                _number.data('inputmask-type' ,'phone');
                            }; break;
                
                            case 'M' : {
                                _number.data('inputmask-type' ,'mobile');
                            }; break;
                
                            case 'F' : {
                                _number.data('inputmask-type' ,'fax');
                            }; break;
                        }
                
                        APP_AMU.inputMask.init('[data-masked]');
                    });
                </script>")
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null, $request = null, $result = null)
    {
        PhoneNumbers::create($request->input());
    }

    /**
     *  update action for update relation
     */
    public function updateDatatable($model = null, $request = null, $result = null)
    {
        PhoneNumbers::findOrFail($request->input('id'))->update(request()->except('id'));
    }

    /**
     *  destroy action for destroy relation
     */
    public function destroyDatatable($model = null, $request = null, $result = null)
    {
        PhoneNumbers::destroy($request['id']);
    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
