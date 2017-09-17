@component('controle.component.modal' ,[
    'id'         => isset($id) ? $id : 'crop-image',
    'title'      => isset($title) ? $title : trans('app.image_cropper'),
    'width'      => isset($width) ? $width : '90%',
    'stopForm'   => true,
    'stopFooter' => true
])
    @include('controle.component.cropper' ,[
        'single'           => isset($single)           ? $single : false,
        'cropperClass'     => isset($cropperClass)     ? $cropperClass : 'aut-cropper-file-upload',
        'showName'         => isset($showName)         ? $showName : true,
        'showOption'       => isset($showOption)       ? $showOption : false,
        'showToggleOption' => isset($showToggleOption) ? $showToggleOption : false,
        'showPreview'      => isset($showPreview)      ? $showPreview : false,
    ])
@endcomponent
