@php
    $originalName = $name;
    $_lang        = isset($_lang) ? $_lang                                        : false;
    $id           = $_lang        ? "{$id}-{$_lang}"                              : $id;
    $real_name    = $_lang        ? "{$name}_{$_lang}"                            : $name;
    $name         = $real_name;
    $label        = $_lang        ? "$label ({$item["native"]})"                  : $label;
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson]) : $attr;
    $dir          = isset($item)  ? $item['dir']                                  : config("form-component.local_direction.$input_lang");

    if($relation)
        $name = "{$relation}[{$real_name}]";

    if($trans) {

        if($relation)
            $name = "{$relation}[trans_{$originalName}][{$real_name}]";
        else
            $name = "trans_{$originalName}[{$real_name}]";
    }
@endphp

@if($formGroup)
<div class="form-group clearfix">
@endif
    <div {{ $contClass ? "class=$contClass" : '' }}>

        @if($label)
            <label class="control-label {{ $star }} {{ $labelClass }}">
                {!! $label !!}
            </label>
        @endif

        <div {{ $inputClass ? "class=$inputClass" : ''}}>

            {{--for change any attr with real lang--}}
            @php
                if($_lang)
                    foreach ($attr as $index => $item)
                        $attr[$index] = preg_replace('/{lang}/',$_lang ,$item)
            @endphp

            {!! Form::textarea($name,$value,array_merge([
                'id'            => $id,
                'class'         => "form-control $class",
                'placeholder'   => shortIfElse(empty($placeholder),$label,$placeholder),
                'data-editable' => 'true',
                'style'         => 'resize: vertical;',
                'dir'           => $dir,
            ],$attr)) !!}
            <div id="error_{{$id}}"></div>
        </div>
    </div>
@if($formGroup)
</div>
@endif