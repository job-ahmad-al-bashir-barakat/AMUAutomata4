@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("utilities::app.$view")])

@endsection

@section('content')

    {!! tree($view) !!}

@endsection

@section('footer')

    @component('controle.component.modal', [
        'id'                => 'modal-tree',
        'title'             => trans('utilities::app.control_menu'),
        'action'            => treeUrl($view),
        'successFunc'       => 'controlMenu',
        'deleteSerialize'   => true
    ])
        {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
        {{ Form::bsHidden('control_page_id' ,'control_page_id' ,null ,'' ,['data-json' => 'control-page-id']) }}
        {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/control',[],'3' ,'group' ,['data-json' => 'parent']) }}
        {{ Form::bsText(trans('utilities::app.code') ,'control-page-code' ,'control_page_code',null,'group required',["data-json" => "control-page-code"]) }}
        {{ Form::bsText(trans('utilities::app.url_path') ,'url-path' ,'url_path' ,null ,'group',["data-json" => "url-path"]) }}
    @endcomponent

    <script>
        function controlMenu() {

            APP_AMU.tree.load()
        }
    </script>
@endsection
