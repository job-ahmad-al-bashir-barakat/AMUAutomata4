@php(extract($extraParameter))
@php(extract($targetModel))

@unless(empty($targetModel))
    @component('controle.component.modal' ,[
        'id'         => $modalId,
        'title'      => $modalTitle,
        'width'      => isset($modalWidth) ? $modalWidth : '700px',
        'stopForm'   => true,
        'stopFooter' => true,
    ])
@endunless
    <input id="{{$id}}"
           name="{{$name}}"
           type="file"
           class="upload-file file-loading {{ $class or '' }}"
           data-upload-url="{{ localizeURL("utilities/$id/image/upload") }}"
           data-delete-url="{{ localizeURL("utilities/$id/image/destroy") }}"
           data-download-folder="{{ \Illuminate\Support\Str::plural($id) }}"
           data-max-file-size="{{ $maxFileSize or 0 }}"
           data-image-width="{{ $imageWidth or null }}"
           data-image-height="{{ $imageHeight or null }}"
           data-min-image-height="{{ $minImageHeight or null }}"
           data-min-image-width="{{ $minImageWidth or null }}"
           data-max-image-height="{{ $maxImageHeight or null }}"
           data-max-image-width="{{ $maxImageWidth or null }}"
           data-max-file-count="{{ $maxFileCount or 0 }}"
           data-min-file-count="{{ $minFileCount or 0 }}"
           data-param="{{ $param or '' }}"
           data-preview-file-type="{{ $previewFileType or "image" }}"
           data-allowed-file-types="{{ $allowedFileTypes or "image" }}"
           data-allowed-file-extensions="{{ $allowedFileExtensions or "jpeg,jpg,bmp,png" }}"
           data-target="#{{ $modalId or '' }}"
           data-cropper="{{ $cropper or 'true' }}"
           data-cropper-selector="{{ $cropperSelector or '.aut-cropper-file-upload' }}"
           data-cropper-modal="{{ $cropperModal or '#crop-image' }}"
           data-show-caption="{{ $showCaption or 'false' }}"
           data-datatable="{{ $datatable or ''}}"
           data-datatable-initialize="{{ $datatableInitialize or 'true' }}"
           data-datatable-initialize-property="{{ $datatableInitializeProperty or '.image' }}"
           data-remove-label="{{ $removeLabel or trans('app.clear') }}"
           data-upload-retry-title="{{ $uploadRetryTitle or trans('app.upload_retry_title') }}"
           data-crop-title="{{ $cropTitle or trans('app.crop_title') }}"
           data-attribute-title="{{ $attributeTitle or trans('app.attribute_title') }}"
           data-download-title="{{ $downloadTitle or trans('app.download_title') }}"
           data-append-location="{{ $appendLocation or '' }}"
           multiple
    >
@unless(empty($targetModel))
    @endcomponent
@endunless






