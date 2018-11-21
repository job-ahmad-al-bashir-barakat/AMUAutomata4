@php(extract($extraParameter))
@php(extract($targetModel))
@php($folderName = config("fileupload.$id.folderName",\Illuminate\Support\Str::plural($id)))
@php(
    $cropRatio = collect(config("fileupload.$id.ratio"))->map(function ($item ,$index) {
        $item['title'] = isset($item['title']) ? trans($item['title']) : $index;
        return $item;
    })
)
@php($datatableInitialize = config('fileupload.datatable',true) ? ($datatableInitialize ?? true) : false)

@unless(empty($targetModel))
    @component('fileupload::component.modal' ,[
        'id'         => $modalId,
        'title'      => $modalTitle,
        'width'      => isset($modalWidth) ? $modalWidth : '700px',
    ])
@endunless

    <div class="file-cont">
        @if($info)
            @include('fileupload::component.partial.form_info')
        @endif
        @if($cropper && $cropRatio->count())
            @include('fileupload::component.partial.need_crop')
            @include('fileupload::component.partial.ratio_sizes')
        @endif
        <input id="{{$id}}"
               name="{{$name}}"
               type="file"
               class="file-loading upload-file @if($class) {{ $class }} @else load-file @endif"
               data-upload-url="{{ fileUploadLocalizeURL("fileupload/$id/$type/upload") }}"
               data-delete-url="{{ fileUploadLocalizeURL("fileupload/$id/$type/destroy") }}"
               data-download-folder="{{ $folderName }}"
               data-max-file-size="{{ $maxFileSize ?? 0 }}"
               data-image-width="{{ $imageWidth ?? null }}"
               data-image-height="{{ $imageHeight ?? null }}"
               data-min-image-height="{{ $minImageHeight ?? null }}"
               data-min-image-width="{{ $minImageWidth ?? null }}"
               data-max-image-height="{{ $maxImageHeight ?? null }}"
               data-max-image-width="{{ $maxImageWidth ?? null }}"
               data-max-file-count="{{ $maxFileCount ?? 0 }}"
               data-min-file-count="{{ $minFileCount ?? 0 }}"
               data-param="{{ $param ?? '' }}"
               data-preview-file-type="{{ $previewFileType ?? 'any' }}"
               data-allowed-file-types="{{ $allowedFileTypes ?? null }}"
               data-allowed-file-extensions="{{ $allowedFileExtensions ?? null }}"
               data-target="#{{ $modalId ?? '' }}"
               data-info="{{ $info ?? true }}"
               data-cropper="{{ ($cropper && $cropRatio->count()) ?? true }}"
               data-cropper-selector="{{ $cropperSelector ?? '.aut-cropper-file-upload' }}"
               data-cropper-modal="{{ $cropperModal ?? '#crop-image' }}"
               data-allow-ratio="{{ $allowRatio ?? false }}"
               data-ratio="{{ $cropRatio->toJson() }}"
               data-ratio-count="{{ $cropRatio->count() }}"
               data-ratio-message="{{ trans('fileupload::fileupload.ratio' ,['attribute' => '{name}']) }}"
               data-show-caption="{{ $showCaption ?? false }}"
               data-show-preview="{{ $showPreview ?? true }}"
               data-datatable="{{ $datatable ?? ''}}"
               data-reload-datatable="{{ $reloadDatatable ?? true }}"
               {{--(event, data, previewId, index)--}}
               data-fileuploaded="{{ $fileuploadedEvent ?? '' }}"
               {{--(event, key, jqXHR, data)--}}
               data-filedeleted="{{ $filedeletedEvent ?? '' }}"
               data-datatable-initialize="{{ $datatableInitialize }}"
               data-datatable-initialize-property="{{ $datatableInitializeProperty ?? '' }}"
               data-remove-label="{{ $removeLabel ?? trans('fileupload::fileupload.clear') }}"
               data-upload-retry-title="{{ $uploadRetryTitle ?? trans('fileupload::fileupload.upload_retry_title') }}"
               data-crop-title="{{ $cropTitle ?? trans('fileupload::fileupload.crop_title') }}"
               data-attribute-title="{{ $attributeTitle ?? trans('fileupload::fileupload.attribute_title') }}"
               data-package-append="{{ $packageAppend ?? true }}"
               data-append-name="{{ $appendName ?? '' }}"
               data-append-location="{{ $appendLocation ?? '' }}"
               data-allowed-preview-icons="{{ $allowedPreviewIcons ?? false }}"
               data-auto-replace="{{ $autoReplace ?? false }}"
               data-drop-zone-enabled="{{ $dropZoneEnabled ?? true }}"
               data-close-modal="{{ $closeModal ?? true }}"
               data-read-only="{{ $readOnly ?? false }}"
               accept="{{ $accept ?? "" }}"
               multiple
        >
    </div>

@unless(empty($targetModel))
    @endcomponent
@endunless






