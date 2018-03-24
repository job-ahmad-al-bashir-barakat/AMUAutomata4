{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::modalHeaderOpen() !!}
        <h4>Search Engine Optimization</h4>
    {!! FormComponent::modalHeaderClose() !!}
    {!! FormComponent::formOpen('seo_form', 'post', RouteUrls::builderSeo(), 'ajax-form') !!}
        {!! FormComponent::modalBodyOpen() !!}
            {!! FormComponent::hidden('page_id', 'page_id') !!}
            {!! FormComponent::hidden('optional_id', 'optional_id') !!}
            {!! FormComponent::hidden('table_name', 'table_name') !!}
            {!! FormComponent::langs()->text('Title', 'trans_title', 'trans_title') !!}
            {!! FormComponent::langs()->text('Description', 'trans_description', 'trans_description') !!}
            {!! FormComponent::langs()->autocomplete('Keywords', 'keywords', 'keywords') !!}
        {!! FormComponent::modalBodyClose() !!}
        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}
