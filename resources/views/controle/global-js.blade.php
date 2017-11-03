<script>

    var DIR  = "{{ $dir }}",
        LANG = "{{ $lang }}",
        BASE_URL = "{{ url('/') }}/",
        LOCALIZE_URL = "{{ RouteUrls::home() }}/",
        OPERATION_MESSAGE_FAIL = "{{ trans('app.oper.error') }}",
        OPERATION_MESSAGE_SUCCESS = "{{ trans('app.oper.success') }}",// Added By AA1992
        CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
        SWAL = {
            ok              : '{{ trans('utilities::app.swal.ok') }}',
            title              : '{{ trans('utilities::app.swal.title') }}',
            text               : '{{ trans('utilities::app.swal.text') }}',
            confirmButtonText  : '{{ trans('utilities::app.swal.confirmButtonText') }}',
            cancelButtonText   : '{{ trans('utilities::app.swal.cancelButtonText') }}',
            cancleSafe : {
                text    : '{{ trans('utilities::app.swal.cancleSafe.text') }}',
                message : '{{ trans('utilities::app.swal.cancleSafe.message') }}',
            }
        };

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN,
            }
        });
    });
</script>