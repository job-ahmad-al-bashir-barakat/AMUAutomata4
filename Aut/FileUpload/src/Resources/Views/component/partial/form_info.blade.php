<div class="popover-alt-form hide">
    <div class="ajaxCont">
        <form action="{{ fileUploadLocalizeURL("fileupload/$id/$type/info") }}" method="post" class="ajax-form stop-close-modal" data-get-data="{{ fileUploadLocalizeURL("fileupload/$id/$type/info") }}">
            <div class="panel panel-primary whirl" id="popover-panel" style="width: 250px; margin: 0;">
                <div class="panel-heading">
                    <strong>{{ trans('fileupload::fileupload.image_alt') }}</strong>
                </div>
                <div class="panel-body">
                    <input type="hidden" id='image_id' name="image_id">
                    @foreach(LaravelLocalization::getSupportedLocales() as $key => $item)
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Alt ({{ $item['native'] }})" name="{{ config('fileupload.trans',true) ? "trans_alt[alt_$key]" : "alt_$key"  }}" data-json="{{ $key }}">
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