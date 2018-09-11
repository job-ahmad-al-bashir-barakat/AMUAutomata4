@php
    $id     = isset($id) ? $id : "";
    $active = isset($active) ? $active : true;
    $html   = isset($html)   ? $html : '';
    $class  = isset($class)  ? $class : '';
@endphp

<!-- START panel-->
<div @if($id) id="panel-{{$id}}" @endif class="panel panel-{{ $panelType ?? 'default' }} clearfix {{ $panelClass ?? '' }}" {{ $panelAttr ?? '' }}>
    <div class="panel-heading">
        {{ $title }}
        <a href="@void()" data-tool="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Panel">
            <em class="{{ $active ? "fa fa-minus" : "fa fa-plus" }}"></em>
        </a>
    </div>
    <div class="panel-wrapper collapse @if($active) in @endif" aria-expanded="{{ $active }}">
        <div class="panel-body {{ $class ?? '' }}">
            {!! $slot ?? $html !!}
        </div>
        @if(preg_match('/\b(?<![\S])(footer)(?![\S])\b/',$class))
            <div class="panel-footer">
                <div class="clearfix">
                    {{ $footer ?? '' }}
                </div>
            </div>
        @endif
    </div>
</div>
<!-- END panel-->