<?php

namespace Modules\Admin\Factories;

use Aut\DataTable\Factories\GlobalFactory;
use Modules\Admin\Entities\News;
use Modules\Admin\Entities\Status;

class NewsFactory extends GlobalFactory
{

    /**
     *  get data-table query
     */
    public function getDatatable($news, $request)
    {
        $query = $news::allLangs()->get();

        return $this->table
            ->queryConfig('datatable-news')
            ->queryDatatable($query)
            ->queryMultiLang(['title', 'description', 'content'])
            ->queryAddColumn('review', function ($row) {
                return "<i data-id='{$row->id}' class='{$row->reviewed_icon} hand' data-toggle='modal' data-target='#news_review_modal'></i>";
            })
            ->queryUpdateButton()
            ->queryDeleteButton()
            ->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($news, $request)
    {
        return $this->table
            ->config('datatable-news', trans('admin::app.news'))
            ->addPrimaryKey('id', 'id')
            ->addMultiInputTextLangs(['title'], 'req required')
            ->addMultiTextareaLangs(['description'])
            ->addMultiTextareaLangs(['content'], 'content')
            ->addInputDate(trans('admin::app.publish_date'), 'publish_date', 'publish_date')
            ->addActionButton(trans('admin::app.review'), 'review', 'review', 'center all', '80px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton()
            ->render();
    }

    /**
     *  store action for save relation
     */
    public function storeDatatable($model = null ,$request = null ,News $news = null)
    {
        $news
            ->user()->associate(\Auth::user())
            ->status()->associate(Status::pendingReview())
            ->save();
    }

    /**
     *  store action for update relation
     */
    public function updateDatatable($model = null ,$request = null ,News $news = null)
    {
        $news
            ->user()->associate(\Auth::user())
            ->status()->associate(Status::pendingReview())
            ->save();
    }

    /**
     *  store action for destroy relation
     */
    public function destroyDatatable($model = null ,$request = null ,$result = null)
    {

    }

    /**
     *  inline validate dialog form
     */
    public function validateDatatable()
    {
        return [];
    }
}
