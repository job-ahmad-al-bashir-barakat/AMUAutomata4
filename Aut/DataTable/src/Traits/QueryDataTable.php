<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/16/2016
 * Time: 2:33 PM
 */

namespace Aut\DataTable\Traits;

use Datatables;

trait QueryDataTable
{
    protected $query;

    protected $escapeColumns = [];

    /**
     * @param $query
     * @return $this
     */
    function queryDatatable($query)
    {
        $this->query = Datatables::of($query);

        $this->queryIndexColumn();

        return $this;
    }


    /**
     *
     * Query Builder Extension
     *
     * -- Datatables instance allows you to proxy a database query call.
     *
     * @param $model
     * @return \Yajra\Datatables\Engines\EloquentEngine
     */
    function queryDatatableEloquent($model)
    {
        $dataTable = Datatables::eloquent($model);

        return $dataTable;
    }

    /**
     * @param string $tableId
     * @return $this
     */
    function queryConfig($tableId = '')
    {
        $this->id = $tableId;

        /*
         * Get All Supported lang
         */
        $this->langs  = \LaravelLocalization::getSupportedLanguagesKeys();

        return $this;
    }

    function queryIndexColumn()
    {
        $query = $this->query;

        $query->addIndexColumn();

        return $this;
    }


    /**
     * add new column
     *
     * @param $colKey
     * @param $code string|closure
     * @return $this
     */
    function queryAddColumn($colKey, $closure)
    {
        $query = $this->query;

        $query->addColumn($colKey, $closure);

        return $this;
    }

    /**
     * @param $colKey
     * @param string $relation
     * @param string $value
     * @return $this
     */
    function queryMultiAutocomplete($colKey, $relation = '', $value = '')
    {
        $query = $this->query;

        $query->addColumn($colKey, function ($item) use ($relation, $value) {

            $array = $item->{$relation}->pluck($value)->all();

            return implode(' ,', $array);
        });

        return $this;
    }

    /**
     * @param $colKey
     * @param string $relation
     * @return $this
     */
    function queryMultiAutocompleteTemplete($colKey, $relation = '' ,$target = '')
    {
        $query = $this->query;

        $query->addColumn($colKey, function ($item) use ($relation ,$target) {

            $li = '';

            foreach ($item->$relation as $item)
                $li .= "<li>".colValue($target ,$item);

            return $li;
        });

        return $this;
    }

    /**
     *
     * edit column
     *
     * @param $colKey
     * @param $code string|closure
     * @return $this
     */
    function queryEditColumn($colKey, $closure)
    {
        $query = $this->query;

        $query->editColumn($colKey, $closure);

        return $this;
    }


    /**
     * @param $id
     * @return $this
     */
    function queryUpdateButton($id = 'id', \Closure $func = null)
    {
        $query = $this->query;

        $query->addColumn('update', function ($item) use ($id, $func) {

            $updateIcon = config("datatable.icon.update");

            if ($func) {
                return call_user_func($func, $item);
            }

            return "<a href='#' data-key='{$item->$id}' data-toggle='modal' data-target='#$this->id-modal' class='dialog-update'><i class='$updateIcon'></i></a>";
        });

        return $this;
    }

    /**
     * @param $id
     * @return $this
     */
    function queryDeleteButton($id = 'id', $parentKey = [], \Closure $func = null)
    {
        $query = $this->query;

        $query->addColumn('delete', function ($item) use ($id, $parentKey, $func) {

            $deleteIcon = config("datatable.icon.delete");

            if (!empty($parentKey)) {
                $parent_id = $item;

                foreach ($parentKey as $index => $obj) {
                    $parent_id = $parent_id->$obj;
                }
            }

            if ($func) {
                return call_user_func($func, $item);
            }

            $parent_id = !empty($parentKey) ? "data-parent-key='{$parent_id}'" : "";

            return "<a href='#' data-key='{$item->$id}' $parent_id class='dialog-delete'><i class='$deleteIcon'></i></a>";
        });

        return $this;
    }

    function queryMultiColumn($cols = [])
    {
        $query = $this->query;

        foreach ($this->langs as $lang)
        {
            foreach ($cols as $index => $col)
            {
                $property = snake_case("lang_$col"); //snake_case('lang_'.strtolower($col))

                $query->addColumn("{$col}_{$lang}" ,function ($item) use($property ,$lang) {

                    return isset($item->$property[$lang]) ? $item->$property[$lang]->text : '';
                });
            }
        }

        return $this;
    }

    function queryCustomButton($colKey = '', $rowId = '', $icon = '',$class = '', $attr = '')
    {
        $query = $this->query;

        $query->addColumn($colKey, function ($item) use($rowId ,$class ,$icon ,$attr) {

            if(preg_match_all('/{[a-z-_>]+}/',$attr,$results,PREG_PATTERN_ORDER)) {

                foreach ($results[0] as $result)
                {
                    $property = substr($result, 1, -1);

                    $propArr=explode('->',$property);

                    $obj = $item;

                    foreach ($propArr as $prop)
                    {
                        $obj = $obj->$prop;
                    }

                    $attr = preg_replace("/$result/" ,$obj ,$attr);
                }
            }

            return "<a data-key='{$item->$rowId}' class='$class' $attr><i class='{$icon}'></i></a>";
        });

        return $this;
    }

    function queryCombineColumn($alias ,$cols)
    {
        $query = $this->query;

        $query->editColumn($alias, function ($item) use($cols) {

            $result = '';

            foreach ($cols as $index => $col)
            {
                $result .= $item->{$col};

                if($index != count($cols)-1)
                    $result .= ' ';
            }

            return $result;
        });

        return $this;
    }

    function queryFilterColumn($alias, $dbCol)
    {
        $query = $this->query;

        $query->filterColumn($alias, function($query, $keyword) use ($dbCol) {

            $query->whereRaw("$dbCol like ?", ["%{$keyword}%"]);
        });

        return $this;
    }

    function queryCustomFilterColumn($alias, \Closure $func)
    {
        $query = $this->query;

        $query->filterColumn($alias, $func);

        return $this;
    }

    function queryescapeColumns($columns =[])
    {
        $this->escapeColumns = $columns;

        return $this;
    }

    /**
     * @param $bool
     * @return mixed
     */
    function queryRender($bool = true)
    {
        $query = $this->query;

        $query->escapeColumns($this->escapeColumns);
        // temp
        $bool = true;

        return $query->make($bool);
    }
}