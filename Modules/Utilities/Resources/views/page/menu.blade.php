@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("app.$view")])

@endsection

@section('content')

    {!! tree($view) !!}

@endsection

@section('footer')

    @component('controle.component.modal', [
        'id'     => 'modal-tree',
        'title'  => 'Control Menu',
        'action' => treeUrl($view),
    ])

        {!! Form::hidden('id' ,'' ,['class' => 'primarykey' ,'data-json' => 'id']) !!}

        <div class="form-group">
            {!! Form::label('parent_label', 'Parent', ['class' => 'control-label']) !!}
            {!! autAutocomplete('parent_id' ,'parent_id' ,'autocomplete/control-menu' ,[] ,'' ,'Parent' ,3 ,["data-target" => "#modal-tree" ,'data-json' => 'parent']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('control_page_code_label', 'Code', ['class' => 'control-label star']) !!}
            {!! Form::text('control_page_code','', ['class' => 'form-control required',"data-json" => "control_page_code"]) !!}
            <div id="error_control_page_code"></div>
        </div>

        <div class="form-group">
            {!! Form::label('url_path_label', 'Url Path', ['class' => 'control-label']) !!}
            {!! Form::text('url_path','', ['class' => 'form-control' ,"data-json" => "url_path"]) !!}
        </div>

    @endcomponent

@endsection