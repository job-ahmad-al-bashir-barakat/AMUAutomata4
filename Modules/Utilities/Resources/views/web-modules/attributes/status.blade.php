<div class="form-group ">
    <label class="col-lg-3 control-label" for="status">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <select name="webModule[{{ $code }}]" id="status" class="form-control required req">
            @foreach ($values as $value => $text)
            <option @if($data == $value){{ 'selected' }}@endif value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>
        <div id="error_status"></div>
    </div>
</div>