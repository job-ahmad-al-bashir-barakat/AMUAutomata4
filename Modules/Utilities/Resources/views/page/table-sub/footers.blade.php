{{ FileUpload::ImageUpload('footer_logo' ,'footer_logo' ,'' ,'' ,'570' ,'390' ,[
    'modalId'    => 'footer-logo-upload',
    'modalTitle' => trans('utilities::app.upload_logo')
] ,'#datatable-footers', true, '.image') }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

{!! autGoogleMap('footers',trans('admin::app.gelocation'),'',10,setting('UGL')->first()->value,'.datatable-modal .input-location input') !!}

@component('control.component.modal', [
    'id'                  => 'links-modal',
    'title'               => trans('utilities::app.footer_links'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('footers-links', '', 'false') !!}
@endcomponent

<script>
    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this,'#footer-logo-upload','#datatable-footers');
    }

    function linksModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#links-modal', "?footer_id=" + $($this).data('key'));
    }
</script>
