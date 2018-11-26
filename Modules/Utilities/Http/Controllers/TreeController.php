<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class TreeController extends Controller
{
    protected $factory;

    protected $model;

    protected $tree;

    protected $dir;

    function __construct()
    {
        if(\Route::getCurrentRoute() !== null)
        {
            $tree = \Route::getCurrentRoute()->parameter('treeModel');

            $this->tree = $tree;

            $config = config("tree.$tree");

            $this->factory = $config['factory'];

            $this->model   = $config['model'];

            $this->dir = \LaravelLocalization::getCurrentLocaleDirection();
        }
    }

    //build bynamic prob
    private function setDataCols($control)
    {
        $factory = new $this->factory();

        $dataAttr = $factory->dataAttr();

        $setCols = "";
        foreach ($dataAttr as $index => $col)
        {
            if($index == 'fixed_field') {

                $setCols .= $col;

                continue;
            }

            $index = Str::slug($index);
            // for autocomplete
            if(is_array($col))
            {
                $id   = colValue($col['id'] ,$control) ;
                $name = colValue($col['name'],$control);

                if(!$id)
                    continue;

                $setCols = $setCols . " data-$index='{ \"id\": \"$id\",\"name\" : \"$name\" }'";

                continue;
            }

            // for normal
            if(colValue($col,$control))
                $setCols = trim($setCols ." data-$index='".colValue($col,$control)."'" );
        }

        return $setCols;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($tree ,Request $request)
    {
        $model = $this->model;

        if(!method_exists($this->factory ,'getTreeQuery'))
        {
            if(!request('nodeId'))
            {
                $nodes = $model::orderBy('order')->allLangs()->get()->toTree();
            }
            else
            {
                $node = $model::find(request('nodeId'));
                $nodes = $model::whereAncestorOrSelf($node)->allLangs()->get()->toTree();
            }
        }
        else
        {
            $factory  = new $this->factory();
            $nodes    = $factory->getTreeQuery($request);
        }

        $tree = '';

        $traverse = function ($controls) use (&$traverse ,&$tree) {

            if(count($controls) == 0)
                return "<div class='dd-empty'>". trans('utilities::app.drag_item_here') ."</div>";

            //open ol for child parent
            $tree = "$tree <ol class='dd-list'>";

            foreach ($controls as $control) {

                //build bynamic prob
                $setCols = $this->setDataCols($control);

                //open li for child parent
                $tree = $tree."<li $setCols data-children='{$control->children->count()}' class='dd-item dd3-item'>";

                $factory  = new $this->factory();

                // get Title
                $content = []; $contentKeys = [];
                foreach ($factory->setContent($control) as $index => $itemTitle) {

                    if ($index === 'icons') {
                        $content['icons'][] = $itemTitle;
                    } else if ($index === 'link') {
                        $contentKeys[] = 'link';
                        $content['link'][] = colValue($itemTitle ,$control);
                    } else if ($index === 'html') {
                        $content['html'][] = '';
                    } else if (is_numeric($index)) {
                        $contentKeys[] = 'title';
                        $content['title'][] = colValue($itemTitle ,$control);
                    }
                }

                if(!empty($contentKeys))
                    foreach ($contentKeys as $key)
                        $content[$key] = $factory->getContent($content ,$key);

                $content['icons']  = isset($content['icons']) ? implode(' ' ,$content['icons']) : '';

                $content = $this->dir == "ltr" ? $content : collect($content)->reverse();

                //set li item for each item
                $tree = $tree.view("utilities::tree._treeItem",[
                        'model'       => $this->tree,
                        'content'     => $content,
                    ])->render();

                // reCall func if item has children
                if($control->children->count())
                    $traverse($control->children);

                //close li for child parent
                $tree = $tree."</li>";
            }

            //close ol for child parent
            $tree  = "$tree </ol>";

            return $tree;
        };

        //render tree
        return view("utilities::tree._tree",[
            'model'     => $this->tree,
            'buildTree' => $traverse($nodes)
        ])->render();
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('utilities::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $model = $this->model;

        $factory = new $this->factory();

        $factory->store($request);

        $model::fixTree();

        return Response::json(['operation_message' => trans('app.oper.success')]);
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('utilities::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('utilities::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request ,$tree ,$id)
    {
        $model = $this->model;

        $factory = new $this->factory();

        $factory->update($request ,$id);

        $model::fixTree();

        return Response::json(['operation_message' => trans('app.oper.success')]);
    }

    public function order($tree ,$id = '',Request $request)
    {
        $request->request->add(['transSaveOper' => false]);

        $model = $this->model;

        //update self and siblings order
        if(count($request->input('data')))
            foreach ($request->input('data') as $index => $item) {

                $model::where('id' ,'=' ,$item['id'])->update(['order' => $item['order'] ,'parent_id' => isset($item['parent']) ? $item['parent']['id'] : null]);
            }

        $model::fixTree();

        return Response::json(['operation_message' => trans('app.oper.successOrder')]);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request ,$tree ,$id)
    {
        $model = $this->model;

        $factory = new $this->factory();

        $factory->destroy($request ,$id);

        $model::fixTree();

        return Response::json(['operation_message' => trans('app.oper.success')]);
    }
}
