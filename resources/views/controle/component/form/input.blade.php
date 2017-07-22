@php
    /*
        // class can be used to do some stuff
        group -> add group
        no-label -> remove label
        cont class  -> c:
        label class -> l:
        input class -> i:
    */
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
            {!! Form::$type($name,$value,array_merge([
                'id'          => $id,
                'class'       => "form-control $class",
                'placeholder' => $label
            ],$attr)) !!}
            <div id="error_{{$name}}"></div>
        </div>
    </div>
@if($group)
</div>
@endif