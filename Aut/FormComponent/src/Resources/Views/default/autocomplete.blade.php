@php
    extract(formClassHelper($class));
    $star = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class) ? 'star' : '';
    $attr = $dataJson ? array_merge($attr,['data-json' => $dataJson]) : $attr;
@endphp

@if($formGroup)
<div class="form-group">
@endif
    <div class="{{ $contClass }}">
        @if($label)
            <label class="control-label {{ $star }} {{ $labelClass }}">
                {{$label}}
            </label>
        @endif

        <div {{ $inputClass ? "class=$inputClass" : ''}}>
            {!! Form::select($name,$option,array_keys($option),array_merge([
                 'id'                    => $id,
                 'class'                 => "form-control autocomplete $class",
                 'data-letter'           => $letter,
                 "data-target"           => "body",
                 'tabindex'              => '1',
                 'style'                 => "width: 100%",
                 'data-remote'           => autocompleteURL($remote),
                 'data-placeholder'      => shortIfElse(empty($placeholder),$label,$placeholder),
            ],$attr)) !!}
            <div id='error_{{$id}}'></div>
        </div>
    </div>
@if($formGroup)
</div>
@endif

