<?php

namespace Modules\Utilities\Factories\Tree;

use Illuminate\Http\Request;
use Modules\Utilities\Entities\Page;
use Modules\Utilities\Entities\SiteMenu;

class SiteMenuFactory
{
    function getTreeQuery()
    {
        if(!request('nodeId'))
        {
            $nodes = SiteMenu::where('menu_list_id',\request()->get('menu'))->orderBy('order')->allLangs()->get()->toTree();
        }
        else
        {
            $node = SiteMenu::find(request('nodeId'));
            $nodes = SiteMenu::where('menu_list_id',\request()->get('menu'))->whereAncestorOrSelf($node)->allLangs()->get()->toTree();
        }

        return $nodes;
    }

    function dataAttr()
    {
        return array_merge([
            'id'          => 'id' ,
            'menu'        => 'menu_list_id',
            'name'        => 'titles->'.\App::getLocale().'->text',
            'parent'      => ['id' => 'parent_id','name' => 'parent->lang_name->'.\App::getLocale().'->text'],
            'order'       => 'order',
            'type'        => 'menuable_type',
            'link'        => 'is_link',
            'is-show'     => 'is_show',
            'prefix'      => 'prefix',
            'url'         => 'url',
            'fixed_field' => 'data-saved',
            'dynamic'     => 'dynamic',
        ],lang('name' ,"titles->{lang}->text",'all'));
    }

    function setContent($control)
    {
        if($control->is_show)
            $isShow = "<i class='fa fa-eye'></i>";
        else
            $isShow = "<i class='fa fa-eye-slash'></i>";

        $items = [
            //todo: make delete button
            'icons' => "
                <span style='padding: 4px; display: flex;' class='trash pull-right hand'>
                    <i class='icon-trash'></i>
                </span>
                <span style='padding: 4px; display: flex;' class='is-show pull-right hand'>
                    $isShow
                </span>
            ",
        ];

        if($control->is_link)
            $items[] = 'title_dynamic';
        else
            $items['link'] = 'title_dynamic';

        return $items;
    }

    function getContent($content ,$key)
    {
        return implode(' ' ,$content[$key]);
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
                'menu_list_id'  => $request->input('menu'),
                'order'         => $request->input('order'),
                'menuable_id'   => $request->input('id'),
                'menuable_type' => $request->input('type'),
                'is_link'       => $request->input('link'),
                'prefix'        => $request->input('prefix'),
                'url'           => $request->input('url'),
                'dynamic'       => $request->input('dynamic'),
            ]);

            return;
        }

        $this->create($request->input('parent_id') ,$request->except('id'));
    }

    function update(Request $request ,$id)
    {
        $node = SiteMenu::findOrFail($id);

        $node->update($request->except('id'));
    }

    function destroy(Request $request ,$id)
    {
        SiteMenu::destroy($id);
    }
}
