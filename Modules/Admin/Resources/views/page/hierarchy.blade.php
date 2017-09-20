@extends('admin::layouts.layout')

@section('content_header')

    @include('admin::layouts._content_header',['title' => trans("admin::app.$view")])

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            {!! tree($view) !!}
        </div>
    </div>

@endsection

@section('footer')

    @component('controle.component.modal', [
        'id'                  => 'modal-hierarchy-tree',
        'title'               => trans('admin::app.hierarchy'),
        'action'              => treeUrl($view),
        'successFunc'         => 'hierarchyMenu',
        'stopDeleteSerialize' => true,
        'attr'                => ['data-tree-target' => 'hierarchy-tree']
    ])
        {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
        {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}
        {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/hierarchy',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' ,'data-placeholder' => trans('utilities::app.parent')]) }}
        {{ Form::bsText(trans('admin::app.name'),'name' ,'name' ,null ,'group required langs trans' ,['data-json' => 'name-{lang}']) }}
        {{ Form::bsAutocomplete(trans('admin::app.type') ,'hierarchy-type-id' ,'hierarchy_type_id','autocomplete/hierarchy-type',[],'3' ,'group required' ,['data-json' => 'hierarchy-type']) }}
    @endcomponent

    <script>
        function hierarchyMenu(form ,res) {

            APP_AMU.tree.load($('.' + $(form).data('tree-target')));
        }
    </script>
@endsection
