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
    public function index($tree ,\Request $request)
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
                $tree = $tree."<li $setCols class='dd-item dd3-item'>";

                $factory  = new $this->factory();

                // get Title
                $content = []; $html = [];
                foreach ($factory->setContent() as $index => $itemTitle)
                {
                    if($index !== 'html' )
                        $content['title'][] = colValue($itemTitle ,$control);
                    else
                        $content['html'][] = $itemTitle;
                }

                $content['title'] = $factory->getContent($content['title']);
                $content['html']  = isset($content['html']) ? implode(' ' ,$content['html']) : '';

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
        $factory = new $this->factory();

        $factory->store($request);

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
        $factory = new $this->factory();

        // drag update
        if($request->input('drag' ,''))
        {
            $model = $this->model;

            //update self and siblings order
            if(count($request->input('data')))
                foreach ($request->input('data') as $index => $item) {

                    $model::where('id' ,'=' ,$item['id'])->update(['order' => $item['order']]);
                }

            //update moved node
            $node = $model::findOrFail($id);

            $request->request->add(['transSaveOper' => false]);

            //$node->withoutTrans()->update
            $node->update([
                'parent_id' => $request->input('parent')
                //'order'     => $request->input('order') //we don't need this because we loop over order from data
            ]);

            $parent = $factory->dataAttr();

            $parentId    = colValue($parent['parent']['id']   ,$node);
            $parentTitle = colValue($parent['parent']['name'] ,$node);

            return Response::json(['operation_message' => trans('app.oper.successOrder') ,'id' => $parentId ,'name' => $parentTitle]);
        }
        else
        {
            $factory->update($request ,$id);

            return Response::json(['operation_message' => trans('app.oper.success')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Request $request ,$tree ,$id)
    {
        $factory = new $this->factory();

        $factory->destroy($request ,$id);

        return Response::json(['operation_message' => trans('app.oper.success')]);
    }
}
