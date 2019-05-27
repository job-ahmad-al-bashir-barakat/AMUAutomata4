@php($value = [])
@if($data)
    @php($value = [[$data->id => $data->lang_name[$this->lang]->text]])
@endif
{!! FormComponent::autocomplete($title, 'office', "webModule[{$code}]", 'autocomplete/office', $value, 0, 'group required l:col-lg-3 l:control-label i:col-lg-8') !!}