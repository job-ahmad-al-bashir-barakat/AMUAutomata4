{{ FileUpload::ImageUpload('book_cover' ,'book_cover' ,'' ,'' , null , null ,[
    'modalId'    => 'books-image-upload',
    'modalTitle' => trans('admin::app.books')
] ,'#datatable-books' ,'true' ,'.image',['autoReplace' => true, 'maxFileCount' => 1]) }}

{{ FileUpload::FileUpload('book' ,'book' ,'' ,'' , null , null ,[
    'modalId'    => 'books-file-upload',
    'modalTitle' => trans('admin::app.books')
] ,'#datatable-books' ,true ,'.file',['autoReplace' => true, 'maxFileCount' => 1]) }}

{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showImageUploadModal($this)
    {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#books-image-upload', '#datatable-books');
    }

    function showFileUploadModal($this)
    {
        AUT_UPLOAD.initFileUploadWithDatatable($this, '#books-file-upload', '#datatable-books');
    }
</script>
