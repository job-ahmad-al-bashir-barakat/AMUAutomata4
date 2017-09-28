@php
    $originalName = $name;
    $_lang = isset($_lang) ? $_lang : false;
    $id    = $_lang ? "{$id}-{$_lang}"   : $id;
    $name  = $_lang ? "{$name}_{$_lang}" : $name;
    if($_lang && isset($trans))
        $name    = "trans_{$originalName}[{$name}]";
    $label = $_lang ? "$label ({$item["{$lang}Lang"]})": $label;
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

            {{--for change any attr with real lang--}}
            @php
                if($_lang)
                    foreach ($attr as $index => $item)
                        $attr[$index] = preg_replace('/{lang}/',$_lang ,$item)
            @endphp

            {!! Form::$type($name,$value,array_merge([
                'id'          => $id,
                'class'       => "form-control $class",
                'placeholder' => $label
            ],$attr)) !!}
            <div id="error_{{$id}}"></div>
        </div>
    </div>
@if($group)
</div>
@endif