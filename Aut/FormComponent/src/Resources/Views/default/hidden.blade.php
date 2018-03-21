@php
    $primarykey   = $type == 'primarykey' ? 'primarykey'                          : '';
    $attr         = $dataJson     ? array_merge($attr,['data-json' => $dataJson]) : $attr;
@endphp

{!! Form::hidden($name,$value,array_merge([
    'id'          => $id,
    'class'       => "form-control $primarykey $class",
],$attr)) !!}
