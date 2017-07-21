<div class="js-nestable-action">
    <a data-action="expand-all" class="btn btn-default btn-sm mr-sm">{{ trans('utilities::app.expand_all') }}</a>
    <a data-action="collapse-all" class="btn btn-default btn-sm mr-sm">{{ trans('utilities::app.collapse_all') }}</a>
    <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-tree" data-form-add>{{ trans('utilities::app.add_new_node') }}</a>

</div>
<div class="row">
    <div class="col-md-6">
        <div style="margin-top: 5px;">
            {!!  autAutocomplete('treeAutocomp' ,'treeAutocomp' ,'' ,[] ,'' ,trans('utilities::app.search_tree') ,1)  !!}
        </div>
        <div id="nestable" class="dd">
            {!! $buildTree or '' !!}
        </div>
        <textarea id="nestable-output" class="form-control"></textarea>
    </div>
</div>