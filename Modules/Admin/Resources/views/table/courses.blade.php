{!!
    FileUpload::modal('course-image-upload',trans('admin::app.upload_image'))
        ->tab('course_first_image',trans('265 x 195'),'',true)
        ->ImageUpload('course-265-195' ,'course-265-195' ,'' ,'' ,'265' ,'195' ,[] ,'#datatable-course',true,'.image_265',['autoReplace' => true, 'maxFileCount' => 1])
        ->tab('course_second_image',trans('750 x 500'))
        ->ImageUpload('course-750-500' ,'course-750-500' ,'' ,'' ,'750' ,'500' ,[] ,'#datatable-course',true,'.image_750',['autoReplace' => true, 'maxFileCount' => 1])
        ->render()
 !!}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

@component('controle.component.modal', [
    'id'                  => 'prerequisite-custom',
    'title'               => trans('admin::app.prerequisite'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('prerequisite' ,'' ,'false') !!}
@endcomponent

<script>
    function showFileUploadModal($this) {

        AUT_UPLOAD.initFileUploadWithDatatable($this,'#course-image-upload','#datatable-course');
    }

    function prerequisiteModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#prerequisite-custom', "?course=" + $($this).data('key') + "&parent=" + $($this).data('parent'));
    }
</script>
