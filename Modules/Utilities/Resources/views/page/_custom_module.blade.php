
@section('component')
    <div id="custom-module-temp" data-clear>
    </div>
@endsection

@section('script')
    <script>
        $(document).on('change','#module-id' ,function () {

            // this when you do change
            var id = $(this).val();
            if(id)
                $('#datatable-custom-modules-modal #custom-module-temp').html('Hi There' + id); // do your post here
        });
    </script>
@endsection