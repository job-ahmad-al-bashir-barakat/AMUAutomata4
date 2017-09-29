@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("utilities::app.$view")])

@endsection

@section('content')

    @include("utilities::page._{$view}_tree")

@endsection

@section('footer')

    @include("utilities::page._{$view}_tree_modal")

@endsection
