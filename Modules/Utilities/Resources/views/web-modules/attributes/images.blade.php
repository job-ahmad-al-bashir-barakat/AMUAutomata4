<div class="form-group ">
    <label class="col-lg-3 control-label" for="limit">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <i class="fa fa-image hand" style="font-size: 25px" onclick="showFileUploadModal(this)"></i>
        <select id="images" name="webModule[{{ $code }}][]" class="form-control required req hide" multiple>
            @foreach ($data as $value => $text)
                <option selected value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>
        <div id="error_limit"></div>
    </div>
</div>
