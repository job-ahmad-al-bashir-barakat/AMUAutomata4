@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_item'),
    'action'              => treeUrl($view),
    'successFunc'         => 'generalMenu',
    'extraSerialize'      => 'serializeTree',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => 'general-tree'],
    'width'               => '60%'
])

    @component('controle.component.tabpanel' ,['tabs' => ['make_link' ,'drag_menu']])

        @slot('make_link')
            {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
            {{--tree-autocomplete-change is class for change event to fill order with its value--}}
            {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' , 'data-placeholder' => trans('utilities::app.parent')]) }}
            {{ Form::bsText(trans('utilities::app.name'),'name' ,'name' ,null ,'group langs trans' ,['data-json' => 'name-{lang}']) }}
            {{ Form::bsText(trans('utilities::app.name_route') ,'name-route' ,'name_route','#' ,'group required',["data-json" => "name-route"]) }}
            {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}
        @endslot

        @slot('drag_menu')
            @include("utilities::page._general_sub_section")
        @endslot

    @endcomponent

@endcomponent

<script>

    $('#modal-general-tree').on('hidden.bs.modal' ,function () {

        APP_AMU.tree.clear('#nestable-menu' ,'{{ trans("utilities::app.drag_item_here") }}');
    });

    function generalMenu(form ,res) {

        APP_AMU.tree.ajaxLoad($('.' + $(form).data('tree-target')));
    }

    function serializeTree(form) {

        return {
            'tree_menu' : $('#nestable-menu').nestable('serialize'),
        };
    }
</script>


