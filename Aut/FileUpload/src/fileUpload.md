# Include

### ltr css 
```
'../plugin/bootstrap-fileinput/css/fileinput.css',
'../plugin/cropper/dist/cropper.css',
'../cropper-ltr.css'
```
### rtl css 
```
'../plugin/bootstrap-fileinput/css/fileinput.css',
'../plugin/bootstrap-fileinput/css/fileinput-rtl.css',
'../plugin/cropper/cropper.css',
'../cropper-rtl.css'
```
### js 
```
'../plugin/bootstrap-fileinput/js/fileinput.js',
'../plugin/bootstrap-fileinput/themes/fa/theme.js',
'../plugin/bootstrap-fileinput/js/plugins/purify.js',
'../plugin/cropper/cropper.js',
'../plugin/jspath/jspath.js',
'../plugin/lodash/lodash.js',
'../file-upload.js'
```
### ltr js
```
'../plugin/bootstrap-fileinput/js/locales/en.js',
```
### rtl js
```
'../plugin/bootstrap-fileinput/js/locales/ar.js',
```
### copy
```
mix.copy('../plugin/bootstrap-fileinput/img', 'public/img' ,false);
mix.copy('../img', 'public/img' ,false);
```

###  Global Js Variable 
```
var DIR  = "{{ $dir }}",
    LANG = "{{ $lang }}";
```
###  composer
```
"Aut\\FileUpload\\": "Aut/FileUpload/src"
```

# app config

#### ServiceProvider
```
Aut\FileUpload\FileUploadServiceProvider::class,
composer dump-autoload
```
#### Facade
```
"FileUpload" => Aut\FileUpload\FileUploadFacade::class,
```
#### publish config and public/vendor/fileupload
```
php artisan vendor:publish --provider="Aut\FileUpload\FileUploadServiceProvider"
```
# Lesson

FileUpload Facade class has 4 functions
```php
ImageUpload : for upload only image 
VideoUpload : for upload only Video 
ImageVideoUpload : for upload only Image and video 
FileUpload : for upload all type of files
ImageUploadCropper : this function for create cropper modal place it once for any page you need cropper with it.  
```

FileUpload Facade functions params
```php
'id'                                 => 'this will be route_model inside fileupload config',
'name'                               => 'this wiil be param of file send with request',
'class'                              => '',
'param'                              => 'fixed param send with request',
'imageWidth'                         => 'image width will use wuth cropper please put the same value as fileupload config ratio',
'imageHeight'                        => 'image height will use wuth cropper please put the same value as fileupload config ratio',
// targetModel if you leave it empty fileinput will not placed inside modal
'targetModel' => [ 
    'modalId'        => '',
    'modalTitle'     => '',
    'modalWidth'     => '700px',
],
'datatable'                          => 'datatable id that liked with file upload', 
'datatableInitialize'                => true/false if false we will get data from custom locaton placed with your blade,
'datatableInitializeProperty'        => '.image get data fileinput from this relation',
'extraParameter'                     => [
    'maxFileCount'          => '0', // if autoReplace set to true this must be set to 1
    'minFileCount'          => '0',
    'minImageWidth'         => null,
    'minImageHeight'        => null,
    'maxImageWidth'         => null,
    'maxImageHeight'        => null,
    'previewFileType'       => 'any', // don't change this
    'allowedFileTypes'      => null,  // don't change this
    'allowedFileExtensions' => null,  // don't change this
    'packageAppend'         => true,  // true/false append upload/delete file id inside custom locations 
    'appendLocation'        => '',    // location where ids of files will placed   
    'appendName'            => '',    // name attr for locations inputs 
    'reloadDatatable'       => true,    
    'fileuploadedEvent'     => '',    // event for after upload
    'filedeletedEvent'      => '',    // event for after delete  
    'allowedPreviewIcons'   => false, // allow icons for preview   
    'autoReplace'           => false, // autoReplace files when files >= maxFileCount 
    'showCaption'           => false,
    'showPreview'           => true,
    'allowRatio'            => false, // allow show multi ration for choosen inside cropper modal
    'closeModal'            => true,    
    'dropZoneEnabled'       => true,
    'cropper'               => true, 
    'info'                  => true, 
    'accept'                => '',   // don't change this
]
```

fileupload config
```php
'route_model' => [

    'model'  => \Modules\Utilities\Entities\Model::class,

    'ratio' => [
        'first_ratio'  => [ 'title' => 'admin::app.large', 'width'  => '60', 'height' => '60', ],
        'second_ratio' => [ 'title' => 'admin::app.large', 'width'  => '480', 'height' => '480', ],
    ],

    'thumps' => [
        's' => [ 'width'  => '100', 'height' => '100' ],
        'l' => [ 'width'  => '700', 'height' => '700' ],
    ],

    'relationType'       => 'one', // 'many'
    'relationName'       => 'file',
    'relationParam'      => ['image_type'],
    'relationParamFixed' => '',
    'relationId'         => 'image_id',
    'stopRelationSave'   => true

    'db_store'           => true // false will disable store on db 

    'upload_directory'   => 'path upload directory',
    'folderName'         => 'name',

    'user_has_folder'    => 'folder for user id'
    'user_has_field'     => 'user id with image',

    'model_field'        => 'put model id instead of user id ex : 12_lajfusa_file_ex.png -- 12 will be news id',
]
```

# Example

config fileupload 
```php
'partner' => [

   'model'  => \Modules\Admin\Entities\Partner::class,

    'ratio' => [
        'image' => [ 'width'  => '150', 'height' => '150' ],
    ],

    'relationType' => 'one',
    'relationName' => 'image'
],
```

component inside blade js section
```blade
{{ FileUpload::ImageUpload('partner' ,'partner' ,'' ,'' ,'150' ,'150' ,[
    'modalId'    => 'partner-upload',
    'modalTitle' => trans('admin::app.upload_image')
] ,'#datatable-partners' ,true ,'.image',['autoReplace' => true,'maxFileCount' => 1]) }}
    
{{ FileUpload::ImageUploadCropper('90%' ,false ,true,false ,false ,false ,true) }}

<script>
    function showFileUploadModal($this) {

        var modal     = $($this).data('modal'),
            inputFile = $(modal).find('.upload-file');

        AUT_UPLOAD.initFileUploadWithDatatable(
            $this,
            modal,
            '#datatable-partners',
            'id=' + $($this).data('key')
        );
    }
</script>
```
  
    
       