@php
    $originalName = $name;
    $_lang        = isset($_lang) ? $_lang                                          : false;
    $label        = $_lang        ? "$label ({$item["native"]})"                    : $label;
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson])   : $attr;
@endphp

@if($formGroup)
<div class="form-group">
@endif
    <div class="{{ $contClass or '' }} p0">

        @if($label)
            <label class="{{ $labelClass or '' }} control-label p0" style="font-size:12px;">
                {{ $label }} <span class="hidden-sm hidden-xs">:</span>
            </label>
        @endif

        <div {{ $inputClass ? "class=$inputClass" : '' }}>

            {{--for change any attr with real lang--}}
            @php
                if($_lang)
                    foreach ($attr as $index => $item)
                        $attr[$index] = preg_replace('/{lang}/',$_lang ,$item)
            @endphp

            @if(!is_array($name))
                @php
                    $id   = $_lang ? "{$id}-{$_lang}"   : $id;
                    $name = $_lang ? "{$name}_{$_lang}" : $name;
                    if($trans)
                        $name = "trans_{$originalName}[{$name}]";
                @endphp
                {!! Form::label($name ,$value ? $value : trans('form-component::form.no_data'),array_merge([
                    'id'         => $id,
                    'class'      => $class,
                    'style'      => 'font-weight:normal; font-size:12px;',
                    'data-json'  => strtoupper(\Illuminate\Support\Str::snake($name)),
                ],$attr)) !!}
            @else
                @php
                    $id   = $_lang ? "{$id[0]}-{$_lang}"   : $id[0];
                    $first_name = $_lang ? "{$name[0]}_{$_lang}" : $name[0];
                    if($trans)
                        $first_name = "trans_{$originalName[0]}[{$name[0]}]";
                @endphp
                {!! Form::label($first_name ,$value[0] ? $value[0] : trans('form-component::form.no_data'),array_merge([
                    'id'         => $id,
                    'class'      => $class,
                    'style'      => 'font-weight:normal; font-size:12px;',
                    'data-json'  => strtoupper(\Illuminate\Support\Str::snake($first_name)),
                ],$attr)) !!}
                <b>-</b>
                @php
                    $id   = $_lang ? "{$id[1]}-{$_lang}"   : $id[1];
                    $second_name = $_lang ? "{$name[1]}_{$_lang}" : $name[1];
                    if($trans)
                        $second_name = "trans_{$originalName[1]}[{$name[1]}]";
                @endphp
                {!! Form::label($second_name ,$value[1] ? $value[1] : trans('form-component::form.no_data'),array_merge([
                    'id'         => $id,
                    'class'      => $class,
                    'style'      => 'font-weight:normal; font-size:12px;',
                    'data-json'  => strtoupper(\Illuminate\Support\Str::snake($second_name)),
                ],$attr)) !!}
            @endif
        </div>
    </div>
@if($formGroup)
</div>
@endif