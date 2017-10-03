{{ Form::bsImageUpload('lab' ,'lab' ,'' ,'' ,'1366' ,'768' ,[
    'modalId'    => 'lab-image-upload',
    'modalTitle' => trans('admin::app.upload_lab_image')
] ,'#datatable-labs') }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#lab-image-upload').find('.upload-file'),
            datatableRaw = _aut_datatable_getSelectedRowData('#datatable-labs' ,$($this).closest('tr'));

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile ,datatableRaw);

        $('#lab-image-upload').modal('show');
    }
</script>

{{--
<div class="cont-uploaded">
    <input class="file-uploaded" type="hidden" name="lab[]" value="68"/>
    <input class="file-uploaded" type="hidden" name="lab[]" value="67"/>
</div>

{{ Form::bsImageUpload('lab' ,'lab' ,'ajax-file' ,'' ,'1366' ,'768' ,[
    'modalId'    => 'lab-image-upload',
    'modalTitle' => trans('admin::app.upload_lab_image')
] ,'' ,'false') }}

{{ Form::bsImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var inputFile = $('#lab-image-upload').find('.upload-file.ajax-file');

        inputFile.attr('data-param' ,'id=' + $($this).data('key'));

        APP_AMU.fileUpload.load(inputFile);

        $('#lab-image-upload').modal('show');
    }
</script>
--}}
