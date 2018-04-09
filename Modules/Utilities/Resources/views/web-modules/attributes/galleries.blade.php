@if($data)
    @php($value = $data->pluck("lang_title.{$lang}.text", 'id')->toArray())
@else
    @php($value = [])
@endif
{!! FormComponent::autocomplete($title, 'galleryies', "webModule[{$code}][]", 'autocomplete/galleries', $value, 0, 'group required l:col-lg-3 i:col-lg-8', ['multiple']) !!}