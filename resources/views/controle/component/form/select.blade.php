@php
    extract(formClassHelper($class));
    $star = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class) ? 'star' : '';
@endphp

@if($group)
<div class="form-group">
@endif
    <div {{ $contClass ? "class=$contClass" : '' }}>
        @if($label !== false)
            <label class="control-label {{ $star }} {{ $labelClass }}">
                {{$label}}
            </label>
        @endif

        <div {{ $inputClass ? "class=$inputClass" : ''}}>
            {!! Form::select($name,$option,$selected,array_merge([
                 'id'                    => $id,
                 'class'                 => "form-control autocomplete $class",
                 'data-placeholder'      => $label,
                 'style'                 => "width: 100%",
            ],$attr)) !!}
            <div id='error_{{preg_replace('/\[\]/','',$name)}}'></div>
        </div>
    </div>
@if($group)
</div>
@endif

