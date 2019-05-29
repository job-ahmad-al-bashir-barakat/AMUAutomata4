@php($value = [])
@if($data)
    @php($value = [[$data->id => $data->lang_name[app()->getLocale()]->text]])
@endif
{!! FormComponent::autocomplete($title, 'office', "webModule[{$code}]", 'autocomplete/office', $value, 0, 'group l:col-lg-3 l:control-label i:col-lg-8') !!}