<div class="form-group ">
    <label class="col-lg-3 control-label" for="limit">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadModal{{ studly_case($moduleCode) }}(this)"></i>
        <div id="images">
            <input type="hidden" name="webModule[{{ $code }}]" value="{{ $value }}" />
        </div>
        <div id="error_limit"></div>
    </div>
</div>
