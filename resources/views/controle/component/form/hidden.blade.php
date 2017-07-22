@php
    $primarykey = $type == 'primarykey' ? 'primarykey' : '';
@endphp
{!! Form::hidden($name,$value,array_merge([
    'id'          => $id,
    'class'       => "form-control $primarykey $class"
],$attr)) !!}
