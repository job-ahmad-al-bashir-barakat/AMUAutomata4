<?php

namespace Modules\Utilities\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\SocialNetwork;

class SocialNetworkFactory extends GlobalFactory
{

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = SocialNetwork::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-social-network')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiColumn(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-social-network',trans('admin::app.social_network'))
            ->addPrimaryKey('id','id')
            ->addMultiInputs(['name'])
            ->addInputText(trans('app.code'),'code' ,'code')
            ->addActionButton(trans('gen.update'),'update','update')
            ->addActionButton(trans('gen.delete'),'delete','delete')
            ->addNavButton()
            ->render();
    }

}
