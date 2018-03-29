@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' => $title])
@endsection

@section('content')
    {!! autFixedGoogleMap(15,setting('UGL')->first()->value) !!}
@stop
