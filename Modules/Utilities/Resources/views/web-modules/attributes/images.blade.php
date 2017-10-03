<div class="form-group ">
    <label class="col-lg-3 control-label" for="limit">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadModal(this)"></i>
        <div id="images">
            @foreach ($data as $value)
                <input type="hidden" name="webModule[{{ $code }}][]" value="{{ $value }}" />
            @endforeach
        </div>
        <div id="error_limit"></div>
    </div>
</div>
