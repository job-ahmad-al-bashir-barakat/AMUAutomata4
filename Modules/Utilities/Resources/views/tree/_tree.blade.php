<div class="js-nestable-action">
    <a data-action="expand-all" class="btn btn-default btn-sm mr-sm">{{ trans('utilities::app.expand_all') }}</a>
    <a data-action="collapse-all" class="btn btn-default btn-sm mr-sm">{{ trans('utilities::app.collapse_all') }}</a>
    <a data-action="reset_tree" class="btn btn-default btn-sm mr-sm">{{ trans('utilities::app.reset_tree') }}</a>
    <a data-action="add_tree_node" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-{{$model}}-tree" data-form-add>{{ trans('utilities::app.add_new_node') }}</a>
</div>
<div>
    <div style="margin-top: 5px;">
        {{ \Form::bsAutocomplete(false,'treeAutocomplete' ,'treeAutocomplete',"autocomplete/$model",[],'3' ,'c:sss group' ,['data-placeholder' => trans('utilities::app.search_tree')]) }}
    </div>
    <div class="nestable dd">
        {!! $buildTree or '' !!}
    </div>
    @if(app()->environment() == 'local')
        <br>
        <textarea class="nestable-output form-control"></textarea>
    @endif
</div>
