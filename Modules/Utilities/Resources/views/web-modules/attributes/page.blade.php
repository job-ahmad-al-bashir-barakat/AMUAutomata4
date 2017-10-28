@if($data)
    @php($value = [[$data->id => $data->transName->first()->text]])
@else
    @php($value = [])
@endif
{!! Form::bsAutocomplete($title, 'pages', "webModule[{$code}]", 'autocomplete/pages', $value, 0, 'group required l:col-lg-3 i:col-lg-8') !!}