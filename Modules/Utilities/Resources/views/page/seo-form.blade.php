{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::formOpen('seo_form', 'post', RouteUrls::builderSeo()) !!}
        {!! FormComponent::modalHeaderOpen('Search Engine Optimization') !!}
            {{--(koko)--}}
        {!! FormComponent::modalHeaderClose() !!}
        {!! FormComponent::modalBodyOpen() !!}
            {!! FormComponent::hidden('page_id', 'page_id') !!}
            {!! FormComponent::hidden('optional_id', 'optional_id') !!}
            {!! FormComponent::hidden('table_name', 'table_name') !!}
            {!! FormComponent::langs()->text('Title', 'title', 'title'/*,'','required'*/) !!}{{--use required for validation --}}
            {!! FormComponent::langs()->text('Description', 'description', 'description') !!}
            {!! FormComponent::langs()->autocomplete('Keywords', 'keywords', 'keywords', '', [], '0', '', ['data-tags' => "true"]) !!}
        {!! FormComponent::modalBodyClose() !!}
        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}
