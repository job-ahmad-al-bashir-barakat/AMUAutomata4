@extends('utilities::layouts.layout')

@section('content_header')
    @include('utilities::layouts._content_header', ['title' => $title])
@endsection

@section('content')
    <div class="row-masonry row-masonry-xl-2 row-masonry-lg-3 row-masonry-md-2 row-masonry-sm-2">
        @foreach($modules as $module)
            @if($module->lang_description[$lang]->text)
                <div class="col-masonry">
                    <div class="box-placeholder m0">
                        <p class="text-center text-muted">
                            <strong>{!! $module->lang_name[$lang]->text !!}</strong>
                        </p>
                        @if($module->image_path)<img src="{{ asset($module->image_path) }}" style="width: 100%">@endif
                        <p>{!! $module->lang_description[$lang]->text !!}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@stop
