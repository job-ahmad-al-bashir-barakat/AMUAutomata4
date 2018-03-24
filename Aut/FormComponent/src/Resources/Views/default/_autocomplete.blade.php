@php
    $originalName = $name;
    $_lang        = isset($_lang) ? $_lang                                        : false;
    $id           = $_lang        ? "{$id}-{$_lang}"                              : $id;
    $name         = $_lang        ? "{$name}_{$_lang}"                            : $name;
    $label        = $_lang        ? "$label ({$item["native"]})"                  : $label;
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson]) : $attr;

    if($trans)
        $name = "trans_{$originalName}[{$name}]";
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
                     'data-editable'         => true,
                ],$attr)) !!}
                <div id='error_{{$id}}'></div>
            </div>
        </div>
@if($formGroup)
    </div>
@endif

