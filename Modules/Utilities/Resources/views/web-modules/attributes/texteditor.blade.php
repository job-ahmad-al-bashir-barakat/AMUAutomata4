@foreach ($supportedLangs as $langCode => $lang)

<div class="form-group ">
    <label class="col-lg-3 control-label" for="module-texteditor">{{ $title }} ({{ $langCode }})  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <textarea id='module-texteditor_{{ $langCode }}' class='datatable-text-editor' name="webModule[{{ $code }}][{{ $langCode }}]">{!! $data[$langCode] !!}</textarea>
        {{--<div id="error_module-texteditor"></div>--}}
    </div>
</div>

@endforeach