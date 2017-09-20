@extends('utilities::layouts.layout')

@section('content_header')

    @include('utilities::layouts._content_header',['title' => trans("utilities::app.$view")])

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            {!! tree($view) !!}
        </div>

        @if(view()->exists("utilities::page._{$view}_sub_section"))
            <div class="col-md-6">
                @include("utilities::page._{$view}_sub_section")
            </div>
        @endif
    </div>

@endsection

@section('footer')

    @include("utilities::page._{$view}_tree_modal")

@endsection
