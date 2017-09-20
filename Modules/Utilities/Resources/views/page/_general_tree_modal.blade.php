@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_menu'),
    'action'              => treeUrl($view),
    'successFunc'         => 'generalMenu',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => 'general-tree']
])
    {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
    {{ Form::bsHidden('page_id' ,'page_id' ,null ,'' ,['data-json' => 'page-id']) }}
    {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}
    {{--tree-autocomplete-change is class for change event to fill order with its value--}}
    {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' ,'data-placeholder' => trans('utilities::app.parent')]) }}
    {{ Form::bsText(trans('utilities::app.code') ,'page-code' ,'page_code',null,'group required',["data-json" => "page-code"]) }}
@endcomponent

<script>

    function generalMenu(form ,res) {

        APP_AMU.tree.load($('.' + $(form).data('tree-target')));
    }
</script>