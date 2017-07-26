<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\ControlMenu;
use Modules\Utilities\Entities\ControlPage;

class ControlMenuFactory
{
    function dataAttr()
    {
        return [
            'id'                => 'id' ,
            'control_page_id'   => 'control_page_id',
            'control_page_code' => 'page->control_page_code' ,
            'url_path'          => 'url_path',
            'parent'            => ['id' => 'parent_id','name' => 'parent->page->control_page_code'],
            'order'             => 'order',
        ];
    }

    function setTitle()
    {
        return [
            'parent' => 'page->control_page_code',
        ];
    }

    function getTitle($titles)
    {
        return implode('/' ,$titles);
    }

    function store(Request $request)
    {
        $controlPage = ControlPage::create($request->input());

        if(!$request->input('parent_id'))
        {
            /*
             * create root node
             */

            $node = new ControlMenu(array_merge($request->input() ,['control_page_id' => $controlPage->id]));

            $node->makeRoot()->save();
        }
        else
        {
            /*
             * create child node
             */
            $parent = ControlMenu::findOrFail($request->input('parent_id'));

            $parent->children()->create(array_merge($request->input() ,['control_page_id' => $controlPage->id]));
        }
    }

    function update(Request $request ,$id)
    {
        $node = ControlMenu::findOrFail($id);

        $node->update($request->input());

        $node->page()->update($request->except('id'));
    }

    function destroy(Request $request ,$id)
    {
        ControlMenu::destroy($id);
    }
}