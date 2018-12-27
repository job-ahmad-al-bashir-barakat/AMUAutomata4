@if($data && $data->count())
    @php($value = [[$data->id => $data->lang_name[app()->getLocale()]->text]])
@else
    @php($value = [])
@endif
{!! FormComponent::autocomplete($title, 'course', "webModule[{$code}]", 'autocomplete/faculty', $value, 0, 'group required l:col-lg-3 l:control-label i:col-lg-8') !!}