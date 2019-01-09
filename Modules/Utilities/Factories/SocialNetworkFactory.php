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
        $query = SocialNetwork::allLangs();

        return $this->table
            ->queryConfig('datatable-social-network')
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name'])
            ->queryRender(true);
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        return $this->table
            ->config('datatable-social-network',trans('utilities::app.social_network'))
            ->addPrimaryKey('id','id')
            ->addMultiInputTextLangs(['name'] ,'req required')
            ->addInputText(trans('utilities::app.code'),'code' ,'code' ,'req required')
            ->addActionButton($this->update,'update','update')
            ->addActionButton($this->delete,'delete','delete')
            ->addNavButton()
            ->render();
    }

}
