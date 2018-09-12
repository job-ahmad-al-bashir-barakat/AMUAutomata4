<script>
    var NO_DATA    = "{{ trans('app.no_data') }}",
        CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
        SERVICE_API_LANG = {
            MALE:   "{{ trans('app.male') }}",
            FEMALE: "{{ trans('app.female') }}",
        };
        
    $(document).ready(function () {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': CSRF_TOKEN,
            }
        });
    });
</script>

<script src="{{ asset('assets/plugins/control/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/js/control/form-component.js') }}"></script>
@if($dir == 'rtl')
    <script src="{{ asset("assets/plugins/control/jquery-validation/localization/messages_ar.js") }}"></script>
@endif