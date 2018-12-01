{!!
    FileUpload::modal('person-image-upload',trans('admin::app.personal_image'))
        ->tab('person-260-230','260 x 230','',true)
        ->ImageUpload('person-260-230' ,'person-260-230' ,'' ,'' ,'260' ,'230' ,[],'[id *= "datatable-persons-"].table',true,'.image_260',['autoReplace' => true, 'maxFileCount' => 1])
        ->tab('person-360-360','360 x 360')
        ->ImageUpload('person-360-360' ,'person-360-360' ,'' ,'' ,'360' ,'360',[],'[id *= "datatable-persons-"].table',true,'.image_360',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
!!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

{!! autGoogleMap('persons',trans('admin::app.gelocation'),'',10,setting('UGL')->first()->value,'.datatable-modal .input-location input') !!}

@component('control.component.modal', [
    'id'                  => 'researches-modal',
    'title'               => trans('admin::app.researches'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('researches' ,'' ,'false') !!}
@endcomponent

<script>
    function researchesModal($this) {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#researches-modal', "?person=" + $($this).data('key'));
    }

    function showFileUploadModal($this) {
        AUT_UPLOAD.initFileUploadWithDatatable($this,'#person-image-upload',$($this).data('tableid'));
    }
</script>