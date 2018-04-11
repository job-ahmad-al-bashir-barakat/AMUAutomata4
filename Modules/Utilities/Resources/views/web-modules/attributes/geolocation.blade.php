<div class="form-group ">
    <label class="col-lg-3 control-label" for="geolocation">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <input type="text" id="geolocation" name="webModule[{{ $code }}]" placeholder="{{ $title }}" value="{{ $data }}" class="form-control required req">
        <div id="error_limit"></div>
    </div>
</div>

