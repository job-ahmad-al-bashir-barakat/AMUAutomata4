@if($data && $data->count())
    @php($value = [[$data->id => $data->transName->first()->text]])
@else
    @php($value = [])
@endif
{!! FormComponent::autocomplete($title, 'vertical_sliders', "webModule[{$code}]", 'autocomplete/vertical-sliders', $value, 0, 'group required l:col-lg-3 l:control-label i:col-lg-8') !!}