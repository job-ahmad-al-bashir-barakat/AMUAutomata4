<div class="js-nestable-action">
    <a data-action="expand-all" class="btn btn-default btn-sm mr-sm">Expand All</a>
    <a data-action="collapse-all" class="btn btn-default btn-sm mr-sm">CollapseAll</a>
    <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-tree">Add New Node</a>

</div>
<div class="row">
    <div class="col-md-6">
        <div style="margin-top: 5px;">
            {!!  autAutocomplete('treeAutocomp' ,'treeAutocomp' ,'' ,[] ,'' ,'Search Tree' ,1)  !!}
        </div>
        <div id="nestable" class="dd">
            {!! $buildTree or '' !!}
        </div>
        <textarea id="nestable-output" class="form-control"></textarea>
    </div>
</div>