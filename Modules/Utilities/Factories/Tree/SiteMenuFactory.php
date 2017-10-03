<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;

class SiteMenuFactory
{

    // id , parent_id , order , is_link ,menuable_id , menuable_type , trans_name

    // save link on link not right
    // make save list and update from modal
    // make save on drag link
    // autocompelte must has list item on link
    // you can add and order list on list and link on list
    // you can not add or order list on link
    // add delete button on item and notify

    // offices is list and add it on menusTables
    // faculties is list and department  is link

    // change font-icon lib and file upload lib
    // work on tree and arrange code
    // fix upload file save delete get
    // work on rest of tables

    function dataAttr()
    {
        return array_merge([
            'id'                => 'id' ,
            'parent'            => ['id' => 'parent_id','name' => 'parent->lang_name->'.\App::getLocale().'->text'],
            'order'             => 'order',
            'type'              => 'menuable_type',
            'link'              => 'is_link',
        ],lang('name' ,"lang_name->{lang}->text",'all'));
    }

    function setContent()
    {
        return [
            //'html' => '<span style="padding: 5px;" class="tags"><i class="icon-tag"></i></span>',
            'title',
        ];
    }

    function getContent($content)
    {
        return implode(' ' ,$content);
    }

    /**
     *
     * create function
     *
     * @param $parent
     * @param $data
     */
    function create ($parent ,$data) {

        if(!$parent)
        {
            /*
             * create root node
             */

            $node = new SiteMenu($data);

            $node->makeRoot()->save();
        }
        else
        {
            /*
             * create child node
             */

            $parent = SiteMenu::findOrFail($parent);

            $parent->children()->create($data);
        }
    }

    function store(Request $request)
    {
        if($request->input('tree_menu' ,''))
        {
            foreach ($request->input('tree_menu') as $item)
            {
                $this->create($request->input('parent_id') ,[
                    'parent_id'     => $request->input('parent_id'),
                    'order'         => $item['order'],
                    'menuable_id'   => $item['id'],
                    'menuable_type' => $item['type'],
                ]);
            }

            return;
        }

        $this->create($request->input('parent_id') ,$request->input());
    }

    function update(Request $request ,$id)
    {
        if($request->input('tree_menu' ,''))
        {
            foreach ($request->input('tree_menu') as $item)
            {
                $this->create($request->input('parent_id') ,[
                    'parent_id'     => $request->input('parent_id'),
                    'order'         => $item['order'],
                    'menuable_id'   => $item['id'],
                    'menuable_type' => $item['type'],
                ]);
            }

            return;
        }

        $node = SiteMenu::findOrFail($id);

        $node->update($request->input());
    }

    function destroy(Request $request ,$id)
    {
        SiteMenu::destroy($id);
    }
}
