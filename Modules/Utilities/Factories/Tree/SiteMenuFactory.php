<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;

class SiteMenuFactory
{
    //----------
    //// id , parent_id , order , is_link ,menuable_id , menuable_type , trans_name
    //// make save list and update from modal
    //// make save on drag link
    //// save link on link not right
    //// autocompelte must has list item on list
    //// you can add and order list on list and link on list
    //// you can not add or order list on link
    //// add delete button on item and notify
    //// fix rtl css / html
    //----------
    // faculties is list and department  is link
    // offices is list and add it on menusTables
    // upadte univercity office name

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
            //todo: make delete button
            'html' => "<span style='padding: 4px; float: right; display: flex;' class='tags'><i class='icon-trash'></i></span>",
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
        if($request->input('link' ,''))
        {
            $request->request->add(['transSaveOper' => false]);

            $this->create($request->input('parent_id') ,[
                'parent_id'     => $request->input('parent_id'),
                'order'         => $request->input('order'),
                'menuable_id'   => $request->input('id'),
                'menuable_type' => $request->input('type'),
                'is_link'       => $request->input('link')
            ]);

            return;
        }

        $this->create($request->input('parent_id') ,$request->except('id'));
    }

    function update(Request $request ,$id)
    {
        dd('update');

        $node = SiteMenu::findOrFail($id);

        $node->update($request->except('id'));
    }

    function destroy(Request $request ,$id)
    {
        SiteMenu::destroy($id);
    }
}
