@php(extract($extraParameter))
@php(extract($targetModel))
@php(
    $cropRatio = collect(config("fileupload.$id.ratio"))->map(function ($item ,$index) {
        $item['title'] = isset($item['title']) ? trans($item['title']) : $index;
        return $item;
    })
)
@php($folderName = config("fileupload.$id.folderName",\Illuminate\Support\Str::plural($id)))

@unless(empty($targetModel))
    @component('fileupload::component.modal' ,[
        'id'         => $modalId,
        'title'      => $modalTitle,
        'width'      => isset($modalWidth) ? $modalWidth : '700px',
    ])
@endunless

    <div class="image-cont">
        <div class="popover-alt-form hide">
            <div class="ajaxCont">
                <form action="{{ fileUploadLocalizeURL("fileupload/$id/image/info") }}" method="post" class="ajax-form stop-close-modal" data-get-data="{{ fileUploadLocalizeURL("fileupload/$id/image/info") }}">
                    <div class="panel panel-primary m-0 whirl" id="popover-panel" style="width: 250px;">
                        <div class="panel-heading">
                            <strong>{{ trans('fileupload::fileupload.image_alt') }}</strong>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" id='image_id' name="image_id">
                            @foreach(LaravelLocalization::getSupportedLocales() as $key => $item)
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Alt ({{ $item['native'] }})" name="trans_alt[alt_{{$key}}]" data-json="{{ $key }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-success btn-sm" data-method="post">{{ trans('fileupload::fileupload.save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="need-crop hide">
            <span class="need-crop-label label label-danger" style="position: absolute; top: 5px; left: 5px; padding: 5px;"><i class="fa fa-crop"></i> need crop</span>
        </div>
        <div class="ratio-cont">
            <span><b>{{ trans('fileupload::fileupload.allowed_ratio') }}</b></span>
            @foreach($cropRatio as $index => $item)
                <span> [{{ $item['width'] }} × {{ $item['height'] }}] </span>
            @endforeach
        </div>
        <input id="{{$id}}"
               name="{{$name}}"
               type="file"
               class="file-loading upload-file @if($class) {{ $class }} @else load-file @endif"
               data-upload-url="{{ fileUploadLocalizeURL("fileupload/$id/image/upload") }}"
               data-delete-url="{{ fileUploadLocalizeURL("fileupload/$id/image/destroy") }}"
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
               data-preview-file-type="{{ $previewFileType ?? "image" }}"
               data-allowed-file-types="{{ $allowedFileTypes ?? "image" }}"
               data-allowed-file-extensions="{{ $allowedFileExtensions ?? "jpeg,jpg,bmp,png" }}"
               data-target="#{{ $modalId ?? '' }}"
               data-cropper="{{ $cropper ?? true }}"
               data-cropper-selector="{{ $cropperSelector ?? '.aut-cropper-file-upload' }}"
               data-cropper-modal="{{ $cropperModal ?? '#crop-image' }}"
               data-allow-ratio="{{ $allowRatio ?? false }}"
               data-ratio="{{ $cropRatio->toJson() }}"
               data-ratio-message="{{ trans('fileupload::fileupload.ratio' ,['attribute' => '{name}']) }}"
               data-show-caption="{{ $showCaption ?? false }}"
               data-show-preview="{{ $showPreview ?? true }}"
               data-datatable="{{ $datatable ?? ''}}"
               data-reload-datatable="{{ $reloadDatatable ?? true }}"
               {{--(event, data, previewId, index)--}}
               data-fileuploaded="{{ $fileuploadedEvent ?? '' }}"
               {{--(event, key, jqXHR, data)--}}
               data-filedeleted="{{ $filedeletedEvent ?? '' }}"
               data-datatable-initialize="{{ $datatableInitialize ?? true }}"
               data-datatable-initialize-property="{{ $datatableInitializeProperty ?? '.image' }}"
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
               accept="image/*"
               multiple
        >
    </div>

@unless(empty($targetModel))
    @endcomponent
@endunless






