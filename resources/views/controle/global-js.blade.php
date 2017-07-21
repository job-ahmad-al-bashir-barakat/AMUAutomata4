<script>

    var DIR  = "{{ $dir }}",
        LANG = "{{ $lang }}",
        OPERATION_MESSAGE_FAIL = "{{ trans('app.oper.error') }}";

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
    });
</script>