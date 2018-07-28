@foreach($inputs as $code => $attribute)
    @if(!is_array($attribute) && $attribute)
        @include('seo_builder::sub.render-inputs', ['inputs' => $seoBuilder->getGraphAttributes($attribute), 'graphType' => $attribute])
    @endif
    @if(is_array($attribute))
        @php($title = trans("seo_builder::seo-builder.attributes.{$graphType}.{$code}"))
        @if($attribute['multi_lang'])
            @php($input = FormComponent::fill("lang_{$attribute['name']}.{lang}.text"))
        @else
            @php($input = FormComponent::fill("{$attribute['name']}"))
        @endif

        @if($attribute['type'] == 'array_string')
            @php($input->tagInput())
        @endif

        @if($attribute['multi_lang'])
            @php($input->trans()->langs())
        @endif

        @if(in_array($attribute['type'], ['string', 'short_string', 'array_string']))
            {!! $input->text($title, $attribute['name'], $attribute['name']) !!}
        @elseif($attribute['type'] == 'select')
            {!! $input->select($title, $attribute['name'], $attribute['name'], $seoBuilder->getOptions($attribute['options'])) !!}
        @elseif($attribute['type'] == 'datetime')
            {!! $input->datetime($title, $attribute['name'], $attribute['name']) !!}
        @endif

    @endif
@endforeach