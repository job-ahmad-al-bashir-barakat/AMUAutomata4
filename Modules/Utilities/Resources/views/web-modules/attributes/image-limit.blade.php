<div class="form-group ">
    <label class="col-lg-3 control-label" for="image_limit">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <input type="text" id="image_limit" name="webModule[{{ $code }}]" data-editable="true" data-role="tagsinput" placeholder="{{ $title }}" value="{{ $data }}" class="form-control required req">
        <div id="error_image_limit"></div>
    </div>
</div>
