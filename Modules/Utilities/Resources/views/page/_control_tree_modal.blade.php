@component('controle.component.modal', [
    'id'                  => 'modal-control-tree',
    'title'               => trans('utilities::app.control_menu'),
    'action'              => treeUrl($view),
    'successFunc'         => 'controlMenu',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => 'control-tree']
])
    {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
    {{ Form::bsHidden('control_page_id' ,'control_page_id' ,null ,'' ,['data-json' => 'control-page-id']) }}
    {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}
    {{--tree-autocomplete-change is class for change event to fill order with its value--}}
    {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/control',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent']) }}
    {{ Form::bsText(trans('utilities::app.code') ,'control-page-code' ,'control_page_code',null,'group required',["data-json" => "control-page-code"]) }}
    {{ Form::bsText(trans('utilities::app.url_path') ,'url-path' ,'url_path' ,null ,'group',["data-json" => "url-path"]) }}
@endcomponent

<script>
    function controlMenu(form ,res) {

        APP_AMU.tree.load($('.' + $(form).data('tree-target')));
    }
</script>