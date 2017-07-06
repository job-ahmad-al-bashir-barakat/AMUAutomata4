@php
    $id = isset($id) ? $id : "";
    $active = isset($active) ? $active : true;
@endphp

<!-- START panel-->
<div @if($id) id="panel-{{$id}}" @endif class="panel panel-default clearfix">
    <div class="panel-heading">
        {{ $title }}
        <a href="@void()" data-tool="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Panel">
            <em class="{{ $active ? "fa fa-minus" : "fa fa-plus" }}"></em>
        </a>
    </div>
    <div class="panel-wrapper collapse @if($active) in @endif" aria-expanded="{{ $active }}">
        <div class="panel-body p0">
            {{ $slot }}
        </div>
    </div>
</div>
<!-- END panel-->