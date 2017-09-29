@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_item'),
    'action'              => treeUrl($view),
    'successFunc'         => 'generalMenu',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => 'general-tree'],
])

    {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
    {{--tree-autocomplete-change is class for change event to fill order with its value--}}
    {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' , 'data-placeholder' => trans('utilities::app.parent')]) }}
    {{ Form::bsText(trans('utilities::app.name'),'name' ,'name' ,null ,'group langs trans' ,['data-json' => 'name-{lang}']) }}
    {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}

@endcomponent

<script>

    function generalMenu(form ,res) {

        APP_AMU.tree.ajaxLoad($('.' + $(form).data('tree-target')));
    }

</script>


