<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;

class SiteMenuFactory
{
    function dataAttr()
    {
        return [
            'id'                => 'id' ,
            'page_id'           => 'page_id',
            'page_code'         => 'page->page_code' ,
            'parent'            => ['id' => 'parent_id','name' => 'parent->page->page_code'],
            'order'             => 'order',
        ];
    }

    function setContent()
    {
        return [
            'html' => '<span style="padding: 5px;" class="tags"><i class="icon-tag"></i></span>',
            'page->page_code',
        ];
    }

    function getContent($content)
    {
        return implode(' ' ,$content);
    }

    function store(Request $request)
    {
        $page = Page::create($request->input());

        if(!$request->input('parent_id'))
        {
            /*
             * create root node
             */

            $node = new SiteMenu(array_merge($request->input() ,['page_id' => $page->id]));

            $node->makeRoot()->save();
        }
        else
        {
            /*
             * create child node
             */
            $parent = SiteMenu::findOrFail($request->input('parent_id'));

            $parent->children()->create(array_merge($request->input() ,['page_id' => $page->id]));
        }
    }

    function update(Request $request ,$id)
    {
        $node = SiteMenu::findOrFail($id);

        $node->update($request->input());

        $node->page()->update($request->except('id'));
    }

    function destroy(Request $request ,$id)
    {
        SiteMenu::destroy($id);
    }
}
