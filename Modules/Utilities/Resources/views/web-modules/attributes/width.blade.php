<div class="form-group ">
    <label class="col-lg-3 control-label" for="width">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <select id="width" name="webModule[{{ $code }}]" class="form-control required req">
            @foreach ($values as $value => $text)
                <option @if($data == $value){{ 'selected' }}@endif value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>
        <div id="error_width"></div>
    </div>
</div>