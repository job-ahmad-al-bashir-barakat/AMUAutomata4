{!! FormComponent::modalOpen('modal-control-tree') !!}
    {!! FormComponent::onSuccess('controlMenu')->getData('item')->formOpen('form-control-tree','post',treeLocalizeUrl($view),'',['data-tree-target' => '.control-tree']) !!}
        {!! FormComponent::modalHeaderOpen(trans('utilities::app.control_item')) !!}
        {!! FormComponent::modalHeaderClose() !!}

        {!! FormComponent::modalBodyOpen() !!}
            {!!  FormComponent::fill('id')->primarykey('id' ,'id') !!}
            {!!  FormComponent::fill('control-page-id')->hidden('control_page_id' ,'control_page_id') !!}
            {!!  FormComponent::fill('order')->hidden('order' ,'order') !!}
            {{--tree-autocomplete-change is class for change event to fill order with its value--}}
            {!!  FormComponent::fill('parent')->placeholder(trans('utilities::app.parent'))->autocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/control',[],'3' ,'tree-autocomplete-change') !!}
            {!!  FormComponent::fill('control-page-code')->text(trans('utilities::app.code') ,'control-page-code' ,'control_page_code',null,'required') !!}
            {!!  FormComponent::fill('url-path')->text(trans('utilities::app.url_path') ,'url-path' ,'url_path' ,null ,'',["dir" => "ltr"]) !!}
        {!! FormComponent::modalBodyClose() !!}

        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons(['deleteSerialize' => false]) !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}

<script>
    function controlMenu(form ,res) {

        AUT_TREE_VIEW.tree.init($(form).data('tree-target'));
    }
</script>