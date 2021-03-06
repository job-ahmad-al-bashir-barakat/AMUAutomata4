<div class="form-group ">
    <label class="col-lg-3 control-label" for="geolocation">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <div class='input-group input-location hand' >
            <input type="text" id="geolocation" name="webModule[{{ $code }}]" placeholder="{{ $title }}" value="{{ $data }}" class="form-control required req" data-toggle="modal" data-modal="#modal-maps-input-location">
            <span class='input-group-addon'>
                <span class='icon-location-pin'></span>
            </span>
        </div>
        <div id="error_limit"></div>
    </div>
</div>
