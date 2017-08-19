<div class="form-group ">
    <label class="col-lg-3 control-label" for="module-texteditor">{{ $title }}  <span class="text-danger">*</span>  </label>
    <div class="col-lg-8">
        <textarea id='module-texteditor' class='datatable-text-editor' name="webModule[{{ $code }}]">{!! $data !!}</textarea>
        {{--<div id="error_module-texteditor"></div>--}}
    </div>
</div>