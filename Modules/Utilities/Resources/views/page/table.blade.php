@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header',['title' => $title])
@endsection

@section('content')

    <div class="container-fluid">
        <!-- START row-->
        <div class="row">

            <div class="col-lg-12">

                @component('controle.component.panel', [
                    'id'    => 'panel-pages',
                    'title' => $title,
                    'class' => 'p0'
                ])
                {!! datatable($table ,$param) !!}
                @endcomponent

            </div>
        </div>
    </div>

@stop
