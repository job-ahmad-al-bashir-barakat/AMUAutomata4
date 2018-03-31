{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::setAjax()->getData('get')->formOpen('seo_form', 'post', RouteUrls::builderSeo()) !!}
        {!! FormComponent::modalHeaderOpen('Search Engine Optimization') !!}
        {!! FormComponent::modalHeaderClose() !!}
        {!! FormComponent::modalBodyOpen() !!}
            {!! FormComponent::fill('page_id')->hidden('page_id', 'page_id') !!}
            {!! FormComponent::fill('optional_id')->hidden('optional_id', 'optional_id') !!}
            {!! FormComponent::fill('table_name')->hidden('table_name', 'table_name') !!}
            {!! FormComponent::fill('title_{lang}')->trans()->langs()->text('Title', 'title', 'title'/*,'','required'*/) !!}{{--use required for validation --}}
            {!! FormComponent::fill('description_{lang}')->trans()->langs()->text('Description', 'description', 'description') !!}
            {!! FormComponent::fill('keywords')->tagInput()->trans()->langs()->text('Keywords', 'keywords', 'keywords') !!}
        {!! FormComponent::modalBodyClose() !!}
        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}
