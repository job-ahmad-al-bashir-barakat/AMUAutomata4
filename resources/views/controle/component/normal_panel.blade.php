@php
    $id     = isset($id) ? $id : "";
    $html   = isset($html)   ? $html : '';
    $class  = isset($class)  ? $class : '';
@endphp

<div @if($id) id="panel-{{$id}}" @endif class="panel panel-{{ $panelType or 'default' }} clearfix {{ $panelClass or '' }}" {{ $panelAttr or '' }}>
    <div class="panel-heading">
        {{ $title }}
    </div>
    <div class="panel-body {{ $class or '' }}">
        {!! $slot or $html !!}
    </div>
    @if(preg_match('/\b(?<![\S])(footer)(?![\S])\b/',$class))
        <div class="panel-footer">
            <div class="clearfix">
                {{ $footer or '' }}
            </div>
        </div>
    @endif
</div>
