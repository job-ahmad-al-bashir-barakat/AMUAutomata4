@php
    $originalName = $name;
    $_lang        = isset($_lang) ? $_lang                       : false;
    $id           = $_lang        ? "{$id}-{$_lang}"             : $id;
    $name         = $_lang        ? "{$name}_{$_lang}"           : $name;
    $label        = $_lang        ? "$label ({$item["native"]})" : $label;
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson]) : $attr;

    if($trans)
        $name = "trans_{$originalName}[{$name}]";
@endphp

@if($formGroup)
    <div class="form-group">
        @endif
        <div {{ $contClass ? "class=$contClass" : '' }}>

            @if($label)
                <label class="control-label {{ $star }} {{ $labelClass }}">
                    {{$label}}
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
                    'data-editable' => true,
                ],$attr)) !!}
                <div id="error_{{$id}}"></div>
            </div>
        </div>
        @if($formGroup)
    </div>
@endif