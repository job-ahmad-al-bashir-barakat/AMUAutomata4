@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("utilities::app.$view")])

    <style>
        .general-tree.ajax [data-link] .dd3-content {
            background-color: rgba(215, 235, 255, 0.67);
        }
        .general-tree.ajax [data-url]>.dd3-content {
            background-color: rgba(255, 201, 201, 0.67);
        }
    </style>

@endsection

@section('content')

    @include("utilities::page._{$view}_tree")

@endsection

@section('footer')

    @include("utilities::page._{$view}_tree_modal")

@endsection
