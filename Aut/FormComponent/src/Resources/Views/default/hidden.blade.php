@php
    $primarykey   = $type == 'primarykey' ? 'primarykey'                            : '';
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson])   : $attr;
    $attr         = $permanent    ? array_merge($attr,['data-permanent' => 'true']) : $attr;
@endphp

{!! Form::hidden($name,$value,array_merge([
    'id'            => $id,
    'class'         => "form-control $primarykey $class",
    'data-editable' => 'true',
],$attr)) !!}
