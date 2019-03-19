<?php

namespace Modules\Admin\Factories\PersonFactoryStructure;


use Aut\DataTable\DataTableBuilder;
use Modules\Admin\Entities\Person;

class ContactInfo
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __invoke(DataTableBuilder $table)
    {
        $type = $this->type;
        $table->relation('contact', function (DataTableBuilder $table) use ($type) {
            $table->horizontalTabCont(function (DataTableBuilder $table) use ($type) {
                $table
                    ->horizontalTab("contact-$type", trans('admin::app.general'), function (DataTableBuilder $table) {
                        $table
                            ->addInputEmail(trans('admin::app.email'), 'contact.email', 'contact.email')
                            ->addInputText(trans('admin::app.phone'), 'contact.phone', 'contact.phone', '', ['data-masked', 'data-inputmask-type' => "phone"])
                            ->addInputText(trans('admin::app.mobile'), 'contact.mobile', 'contact.mobile', '', ['data-masked', 'data-inputmask-type' => "mobile"])
                            ->addInputGroup(trans('admin::app.gelocation'), 'contact.gelocation', 'contact.gelocation', '', 'icon-location-pin', 'input-location hand', ['data-modal' => '#modal-persons-input-location']);
                    }, '', true)
                    ->horizontalTab("address-$type", trans('app.address'), function (DataTableBuilder $table) {
                        $table->addMultiTextareaLangs(['address'], 'none');
                    });
            });
        });
    }
}