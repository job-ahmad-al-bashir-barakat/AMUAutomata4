@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header',['title' => trans("utilities::app.site-menu")])
@endsection

@section('content')
    <div class="js-nestable-action">
        <a class="btn btn-default btn-sm mr-1" data-action="expand-all">Expand All</a>
        <a class="btn btn-default btn-sm" data-action="collapse-all">CollapseAll</a>
        <a class="btn btn-default btn-sm" data-action="show-modal">Add Node</a>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="dd" id="nestable2">
                {{--<ol class="dd-list">
                    <li class="dd-item dd3-item" data-id="13">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 13</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="14">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 14</div>
                    </li>
                    <li class="dd-item dd3-item" data-id="15">
                        <div class="dd-handle dd3-handle">Drag</div>
                        <div class="dd3-content">Item 15</div>
                        <ol class="dd-list">
                            <li class="dd-item dd3-item" data-id="16">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 16</div>
                            </li>
                            <li class="dd-item dd3-item" data-id="17">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 17</div>
                            </li>
                            <li class="dd-item dd3-item" data-id="18">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 18</div>
                            </li>
                        </ol>
                    </li>
                </ol>--}}
                <div class="alert " role="alert">Press <span style="text-decoration: underline">Add Node</span> button to start building your site menu.</div>
            </div>
            <textarea class="form-control" id="nestable2-output"></textarea>
        </div>
    </div>
@endsection

@section('footer')
    {!! FormComponent::modalOpen('modal-site-menu') !!}
        {!! FormComponent::onSuccess('controlMenu')->getData('item')
        ->formOpen('form-control-tree','post', RouteUrls::siteMenu(),'',['data-tree-target' => '.control-tree']) !!}
            {!! FormComponent::modalHeaderOpen(trans('utilities::app.site_node')) !!}
            {!! FormComponent::modalHeaderClose() !!}

            {!! FormComponent::modalBodyOpen() !!}
                {!!  FormComponent::fill('id')->primarykey('id' ,'id') !!}
                {!!  FormComponent::fill('node_id')->hidden('node_id' ,'node_id') !!}
                {!!  FormComponent::fill('order')->hidden('order' ,'order') !!}
                {!!  FormComponent::fill('parent_id')->placeholder(trans('utilities::app.parent_node'))->autocomplete(trans('utilities::app.parent_node') ,'parent_id' ,'parent_id','autocomplete/site-menu',[],'0') !!}
                {!!  FormComponent::fill('render_type')->select(trans('utilities::app.node_type') ,'render_type' ,'render_type', ['list' => 'List', 'data_source' => 'data source']) !!}
                {!!  FormComponent::fill('node_type')->select('Source', 'node_type' ,'node_type', $dataSource) !!}
                {!!  FormComponent::fill('prefix')->text(trans('utilities::app.prefix') ,'prefix' ,'prefix') !!}
                {!!  FormComponent::fill('clear_stack')->text(trans('utilities::app.clear_stack') ,'clear_stack' ,'clear_stack') !!}
            {!! FormComponent::modalBodyClose() !!}

            {!! FormComponent::modalFooterOpen() !!}
                {!! FormComponent::formAjaxButtons(['deleteSerialize' => false]) !!}
            {!! FormComponent::modalFooterClose() !!}
        {!! FormComponent::formClose() !!}
    {!! FormComponent::modalClose() !!}
    <script>
        $(function () {
            $('#nestable2').nestable({
                group: 1,
                maxDepth: 10
            }).on('change', updateOutput);

            // output initial serialised data
            updateOutput($('#nestable2').data('output', $('#nestable2-output')));

            $('.js-nestable-action').on('click', function(e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
                if (action === 'show-modal') {
                    $('#modal-site-menu').modal('show');
                }
            });
        });
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));
            } else {
                output.val('JSON browser support required.');
            }
        };
    </script>
@endsection