{!! FormComponent::modalOpen('page_seos_modal') !!}
    {!! FormComponent::setAjax()->getData('get')->formOpen('seo_form', 'post', RouteUrls::builderSeo()) !!}
        {!! FormComponent::modalHeaderOpen('Search Engine Optimization') !!}
        {!! FormComponent::modalHeaderClose() !!}
        {!! FormComponent::modalBodyOpen() !!}
            {!! FormComponent::fill('id')->primarykey('id', 'id') !!}
            {!! FormComponent::hidden('page_id', 'page_id') !!}
            {!! FormComponent::hidden('optional_id', 'optional_id') !!}
            {!! FormComponent::hidden('table_name', 'table_name') !!}
            {!! FormComponent::fill('lang_title.{lang}.text')->trans()->langs()->text('Title', 'title', 'title'/*,'','required'*/) !!}{{--use required for validation --}}
            {!! FormComponent::fill('lang_description.{lang}.text')->trans()->langs()->text('Description', 'description', 'description') !!}
            {!! FormComponent::fill('lang_keyword.{lang}.text')->tagInput()->trans()->langs()->text('Keyword', 'keyword', 'keyword') !!}
        {!! FormComponent::modalBodyClose() !!}
        {!! FormComponent::modalFooterOpen() !!}
            {!! FormComponent::formAjaxButtons() !!}
        {!! FormComponent::modalFooterClose() !!}
    {!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}
