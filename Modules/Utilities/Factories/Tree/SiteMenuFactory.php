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
                'name-route'        => 'name_route',
            'parent'            => ['id' => 'parent_id','name' => 'parent->lang_name->'.\App::getLocale().'->text'],
            'order'             => 'order',
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

    function store(Request $request)
    {

        /**
         *
         * create function
         *
         * @param $parent
         * @param $data
         */
        $create = function ($parent ,$data) {

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
        };

        if($request->input('tree_menu' ,''))
        {
            foreach ($request->input('tree_menu') as $item)
            {
                $create($request->input('parent_id') ,[
                    'parent_id'     => $request->input('parent_id'),
                    'name_route'    => $request->input('name_route'),
                    'order'         => $item['order'],
                    'menuable_id'   => $item['id'],
                    'menuable_type' => $item['type'],
                ]);
            }

            return;
        }

        $create($request->input('parent_id') ,$request->input());
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
