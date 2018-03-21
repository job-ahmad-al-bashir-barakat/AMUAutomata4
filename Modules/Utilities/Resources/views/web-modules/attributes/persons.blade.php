@if($data)
    @php($value = $data->pluck("lang_name.{$lang}.text", 'id')->toArray())
@else
    @php($value = [])
@endif
{!! FormComponent::autocomplete($title, 'persons', "webModule[{$code}][]", 'autocomplete/person', $value, 0, 'group required l:col-lg-3 i:col-lg-8', ['multiple']) !!}