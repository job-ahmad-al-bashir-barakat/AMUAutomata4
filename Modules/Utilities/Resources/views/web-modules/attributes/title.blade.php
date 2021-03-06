@foreach ($supportedLangs as $langCode => $lang)

<div class="form-group ">
    <label class="col-lg-3 control-label" for="title_{{ $langCode }}">{{ $title }} ({{ $langCode }})</label>
    <div class="col-lg-8">
        <input type="text" id="title_{{ $langCode }}" name="webModule[{{ $code }}][{{ $langCode }}]" placeholder="{{ $title }} ({{ $langCode }})" value="{{ $data[$langCode] }}" class="form-control">
        <div id="error_limit"></div>
    </div>
</div>

@endforeach