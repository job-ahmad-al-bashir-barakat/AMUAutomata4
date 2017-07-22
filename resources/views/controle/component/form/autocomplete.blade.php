@php
    extract(formClassHelper($class));
    $star = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class) ? 'star' : '';
@endphp

@if($group)
<div class="form-group">
@endif
    <div {{ $contClass ? "class=$contClass" : '' }}>
        @unless($noLabel)
            <label class="control-label {{ $star }} {{ $labelClass }}">
                {{$label}}
            </label>
        @endunless

        <div {{ $inputClass ? "class=$inputClass" : ''}}>
            {!! Form::select($name,$option,array_keys($option),array_merge([
                 'id'                    => $id,
                 'class'                 => "form-control autocomplete $class",
                 'data-letter'           => $letter,
                 'data-placeholder'      => $label,
                 "data-target"           => "body",
                 'tabindex'              => '1',
                 'style'                 => "width: 100%",
                 'data-remote'           => url($remote)
            ],$attr)) !!}
            <div id='error_{{$name}}'></div>
        </div>
    </div>
@if($group)
</div>
@endif

