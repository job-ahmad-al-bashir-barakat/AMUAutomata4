@php($value = [])
@if($data)
    @php ($value = [
        [$data->id => $data->lang_name[$lang]->text]
    ])
@endif
{!! FormComponent::autocomplete($title, 'video', "webModule[{$code}]", 'autocomplete/video', $value, 0, 'group required l:col-lg-3 l:control-label i:col-lg-8') !!}
