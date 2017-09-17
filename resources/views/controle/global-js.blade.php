<script>

    var DIR  = "{{ $dir }}",
        LANG = "{{ $lang }}",
        BASE_URL = "{{ url('/') }}/",
        LOCALIZE_URL = "{{ localizeURL('/') }}/",
        OPERATION_MESSAGE_FAIL = "{{ trans('app.oper.error') }}",
        OPERATION_MESSAGE_SUCCESS = "{{ trans('app.oper.success') }}",// Added By AA1992
        CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN,
            }
        });
    });
</script>