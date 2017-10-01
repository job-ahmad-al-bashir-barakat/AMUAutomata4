<div class="form-group ">
    <label class="col-lg-3 control-label" for="url">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <input type="url" id="url" name="webModule[{{ $code }}]" placeholder="{{ $title }}" value="{{ $data }}" class="form-control required req">
        <div id="error_url"></div>
    </div>
</div>
