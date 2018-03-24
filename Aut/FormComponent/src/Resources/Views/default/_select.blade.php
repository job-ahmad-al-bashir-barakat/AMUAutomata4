@php
    extract(formClassHelper($class));
    $star = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class) ? 'star' : '';
    $attr = $dataJson ? array_merge($attr,['data-json' => $dataJson]) : $attr;
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
                {!! Form::select($name,$option,$selected,array_merge([
                     'id'                    => $id,
                     'class'                 => "form-control $class",
                     'style'                 => "width: 100%",
                     'data-placeholder'      => shortIfElse(empty($placeholder),$label,$placeholder),
                     'data-editable'         => true,
                ],$attr)) !!}
                <div id='error_{{$id}}'></div>
                {{--preg_replace('/\[\]/','',$name)--}}
            </div>
        </div>
@if($formGroup)
    </div>
@endif

