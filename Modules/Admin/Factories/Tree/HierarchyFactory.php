<?php

namespace Modules\Admin\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Hierarchy;

class HierarchyFactory
{
    function dataAttr()
    {
        return array_merge([
            'id'                => 'id' ,
            'parent'            => ['id' => 'parent_id' ,'name' => 'parent->lang_name->'.\App::getLocale().'->text'],
            'hierarchy-type'    => ['id' => 'hierarchy_type_id' ,'name' => 'hierarchyType->lang_name->'.\App::getLocale().'->text'],
            'order'             => 'order',
        ],lang('name' ,"lang_name->{lang}->text",'all'));
    }

    function setContent()
    {
        return [
            'lang_name->'.\App::getLocale().'->text',
        ];
    }

    function getContent($content)
    {
        return implode('/' ,$content);
    }

    function store(Request $request)
    {
        if(!$request->input('parent_id'))
        {
            /*
             * create root node
             */

            $node = new Hierarchy($request->input());

            $node->makeRoot()->save();
        }
        else
        {
            /*
             * create child node
             */
            $parent = Hierarchy::findOrFail($request->input('parent_id'));

            $parent->children()->create($request->input());
        }
    }

    function update(Request $request ,$id)
    {
        $node = Hierarchy::findOrFail($id);

        $node->update($request->input());
    }

    function destroy(Request $request ,$id)
    {
        Hierarchy::destroy($id);
    }
}
