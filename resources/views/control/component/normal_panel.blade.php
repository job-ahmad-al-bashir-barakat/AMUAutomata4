@php
    $id     = isset($id) ? $id : "";
    $html   = isset($html)   ? $html : '';
    $class  = isset($class)  ? $class : '';
@endphp

<div @if($id) id="panel-{{$id}}" @endif class="panel panel-{{ $panelType ?? 'default' }} clearfix {{ $panelClass ?? '' }}" {{ $panelAttr ?? '' }}>
    <div class="panel-heading">
        {{ $title }}
    </div>
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
