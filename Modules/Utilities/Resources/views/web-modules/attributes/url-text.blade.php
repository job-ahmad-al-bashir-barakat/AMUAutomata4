@foreach ($supportedLangs as $langCode => $lang)

<div class="form-group ">
    <label class="col-lg-3 control-label" for="url_text_{{ $langCode }}">{{ $title }} ({{ $langCode }})  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <input type="text" id="url_text_{{ $langCode }}" name="webModule[{{ $code }}][{{ $langCode }}]" placeholder="{{ $title }} ({{ $langCode }})" value="{{ $data[$langCode] }}" class="form-control required req">
        <div id="error_url_text_{{ $langCode }}"></div>
    </div>
</div>

@endforeach