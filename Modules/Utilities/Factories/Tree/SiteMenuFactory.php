<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;

class SiteMenuFactory
{
    function dataAttr()
    {
        return array_merge([
            'id'                => 'id' ,
            'page_id'           => 'page_id',
            'page_code'         => 'page->page_code' ,
            'parent'            => ['id' => 'parent_id','name' => 'parent->page->lang_name->'.\App::getLocale().'->text'],
            'order'             => 'order',
        ],lang('name' ,"page->lang_name->{lang}->text",'all'));
    }

    function setContent()
    {
        return [
            //'html' => '<span style="padding: 5px;" class="tags"><i class="icon-tag"></i></span>',
            'page->lang_name->'.\App::getLocale().'->text',
        ];
    }

    function getContent($content)
    {
        return implode(' ' ,$content);
    }

    function store(Request $request)
    {
        $request->request->add(['transSaveOper' => false]);

        dd($request->input());
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
        $request->request->add(['transSaveOper' => false]);

        $node = SiteMenu::findOrFail($id);

        $node->update($request->input());

        $node->page()->update($request->except('id'));
    }

    function destroy(Request $request ,$id)
    {
        SiteMenu::destroy($id);
    }
}
