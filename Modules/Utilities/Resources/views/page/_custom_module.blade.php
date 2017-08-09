
@section('component')
    <div id="custom-module-temp" data-clear>
    </div>
@endsection

@section('script')
    <script>
        $(document).on('change','#module-id' ,function () {
            // this when you do change
            var id = $(this).val();
            $.get("{{ RouteUrls::attributeHtml() }}", {attributeId: id}, function (res) {
                $('#datatable-custom-modules-modal #custom-module-temp').html('Hi There' + id);
            });
        });
    </script>
@endsection