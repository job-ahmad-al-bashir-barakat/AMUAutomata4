
@section('component')
    <div id="custom-module-temp" data-clear>
    </div>
@endsection

@section('script')
    <script>
        $(document).on('change','#module-id' ,function () {
            // this when you do change
            var id = $(this).val();
            if(id) {
                $.get("{{ RouteUrls::attributeHtml() }}", {attributeId: id}, function (res) {
                    $('#datatable-custom-modules-modal #custom-module-temp').html(res.html);

                    if(res.id == 2){
                        APP_AMU.ckeditor.reset('' ,'' ,'single' ,'module-textarea-id');
                        APP_AMU.ckeditor.init('body' ,'.datatable-text-editor');
                    }
                });
            } else {
                $('#datatable-custom-modules-modal #custom-module-temp').html('');
            }
        });
    </script>
@endsection