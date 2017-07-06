<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class TreeController extends Controller
{
    protected $factory;

    protected $model;

    function __construct()
    {
        if(\Route::getCurrentRoute() !== null)
        {
            $tree = \Route::getCurrentRoute()->parameter('treeModel');

            $config = config("tree.$tree");

            $this->factory = $config['factory'];

            $this->model   = $config['model'];
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
            // for autocomplete
            if(is_array($col))
            {
                $id   = colValue($col['id'] ,$control) ;
                $name = colValue($col['name'],$control);

                $setCols = $setCols . " data-$index='{ \"id\": \"$id\",\"name\" : \"$name\" }'";

                break;
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
    public function index($tree)
    {
        $model = $this->model;

        $nodes = $model::get()->toTree();

        $tree = '';

        $traverse = function ($controls) use (&$traverse ,&$tree) {

            //open ol for child parent
            $tree = "$tree <ol class='dd-list'>";

            foreach ($controls as $control) {

                //build bynamic prob
                $setCols = $this->setDataCols($control);

                //open li for child parent
                $tree = $tree."<li $setCols class='dd-item dd3-item'>";

                $factory      = new $this->factory();

                // get Title
                $titles = [];
                foreach ($factory->setTitle() as $index => $itemTitle)
                {
                    $titles[] = colValue($itemTitle ,$control);
                }

                $title = $factory->getTitle($titles);

                //set li item for each item
                $tree = $tree.view("utilities::tree._treeItem",[
                    'title' => $title
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

        $factory->update($request ,$id);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $factory = new $this->factory();

        $factory->destroy($id);
    }
}
