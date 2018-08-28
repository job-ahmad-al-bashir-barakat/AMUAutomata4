{!! Form::image($src ,$name ,array_merge([
    'class'      => "$class",
    'data-json'  => strtoupper(\Illuminate\Support\Str::snake($name)),
],$attr)) !!}
