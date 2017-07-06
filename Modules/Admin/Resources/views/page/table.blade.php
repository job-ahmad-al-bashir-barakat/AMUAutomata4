@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' ,$title])
@endsection

@section('content')

    <div class="container-fluid">
        <!-- START row-->
        <div class="row">

            <div class="col-lg-12">

                @component('controle.component.panel', [
                    'id'    => 'panel-pages',
                    'title' => $title
                ])
                    {!! datatable($table ,$param) !!}
                @endcomponent

            </div>
        </div>
    </div>
@stop
