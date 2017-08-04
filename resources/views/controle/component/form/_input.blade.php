@php
    $originalName = $name;
    $id    = isset($_lang) ? "{$id}-{$_lang}"   : $id;
    $name  = isset($_lang) ? "{$name}_{$_lang}" : $name;
    if(isset($trans))
        $name    = "trans_{$originalName}[{$name}]";
    $label = isset($_lang) ? "$label ({$item["{$_lang}Lang"]})": $label;
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

            {{--for change any attr with real lang--}}
            @php
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