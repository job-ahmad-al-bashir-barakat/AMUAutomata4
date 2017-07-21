@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("utilities::app.$view")])

@endsection

@section('content')

    {!! tree($view) !!}

@endsection

@section('footer')

    @component('controle.component.modal', [
        'id'     => 'modal-tree',
        'title'  => trans('utilities::app.control_menu'),
        'action' => treeUrl($view),
    ])
        {!! Form::hidden('id' ,'' ,['class' => 'primarykey' ,'data-json' => 'id']) !!}

        <div class="form-group">
            {!! Form::label('parent-label', trans('utilities::app.parent'), ['class' => 'control-label']) !!}
            {!! autAutocomplete('parent-id' ,'parent_id' ,'autocomplete/control-menu' ,[] ,'' , trans('utilities::app.parent') ,3 ,["data-target" => "body" ,'data-json' => 'parent']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('control-page-code-label',  trans('utilities::app.code'), ['class' => 'control-label star']) !!}
            {!! Form::text('control_page_code','', ['class' => 'form-control required',"data-json" => "control-page-code"]) !!}
            <div id="error_control_page_code"></div>
        </div>

        <div class="form-group">
            {!! Form::label('url-path-label', trans('utilities::app.url_path'), ['class' => 'control-label']) !!}
            {!! Form::text('url_path','', ['class' => 'form-control' ,"data-json" => "url-path"]) !!}
        </div>

    @endcomponent

@endsection