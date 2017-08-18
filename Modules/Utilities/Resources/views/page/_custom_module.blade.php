
@section('component')
    <div id="custom-module-temp" data-clear>
    </div>
@endsection

@section('script')
    <script>
        $(document).on('change','#module-id' ,function () {
            // this when you do change
            var id = $(this).val();
            var $template = $('#datatable-custom-modules-modal #custom-module-temp');
            if(id) {
                $.get("{{ RouteUrls::moduleAttributesInputs() }}", {customModuleId: id}, function (res) {
                    $template.html(res.html);
                    if($template.find('.datatable-text-editor').length){
                        APP_AMU.ckeditor.reset('' ,'' ,'single' ,'module-textarea-id');
                        APP_AMU.ckeditor.init('body' ,'.datatable-text-editor');
                    }
                });
            } else {
                $template.html('');
            }
        });
    </script>
@endsection