@extends('admin::layouts.layout')

@section('content_header')

    @include('admin::layouts._content_header',['title' => trans("admin::app.$view")])

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            {!! tree($view ,1 ,'' ,5 ,'order') !!}
        </div>
    </div>

@endsection

@section('footer')

{!! FormComponent::modalOpen('modal-hierarchy-tree') !!}
    {!! FormComponent::onSuccess('hierarchyMenu')->formOpen('form-hierarchy-tree','post',treeLocalizeUrl($view),'',['data-tree-target' => '.hierarchy-tree']) !!}
        {!! FormComponent::modalHeaderOpen(trans('admin::app.hierarchy')) !!}
        {!! FormComponent::modalHeaderClose() !!}

        {!! FormComponent::modalBodyOpen() !!}
            {!! FormComponent::fill('id')->primarykey('id' ,'id') !!}
            {!! FormComponent::fill('order')->hidden('order' ,'order') !!}
            {!! FormComponent::fill('parent')->placeholder(trans('utilities::app.parent'))->autocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/hierarchy',[],'3' ,'tree-autocomplete-change') !!}
            {!! FormComponent::fill('name-{lang}')->langs()->trans()->text(trans('admin::app.name'),'name' ,'name' ,null ,'required') !!}
            {!! FormComponent::fill('hierarchy-type')->placeholder(trans('admin::app.type'))->autocomplete(trans('admin::app.type') ,'hierarchy-type-id' ,'hierarchy_type_id','autocomplete/hierarchy-type',[],0 ,'required') !!}
        {!! FormComponent::modalBodyClose() !!}

        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons(['deleteSerialize' => false]) !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}

<script>
    function hierarchyMenu(form ,res) {

        AUT_TREE_VIEW.tree.init($(form).data('tree-target'));
    }
</script>
@endsection
