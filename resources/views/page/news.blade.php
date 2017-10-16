@extends('temp_layout')

@section('content')
    @include('page._coming_soon')
@endsection

@section('footer')
    <script>

        <!-- Final Countdown Timer Script -->
        $(document).ready(function() {
            $('#basic-coupon-clock').countdown('2017/10/10', function(event) {
                $(this).html(event.strftime('%D <span class="font-16">Days</span> %H <span class="font-16">Hours</span> %M <span class="font-16"> Minutes</span> %S <span class="font-16"> Seconds</span>'));
            });
        });

        $('#mailchimp-subscription-form').ajaxChimp({
            callback: mailChimpCallBack,
            url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
        });

        function mailChimpCallBack(resp) {
            // Hide any previous response text
            var $mailchimpform = $('#mailchimp-subscription-form'),
                $response = '';
            $mailchimpform.children(".alert").remove();
            if (resp.result === 'success') {
                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
            } else if (resp.result === 'error') {
                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
            }
            $mailchimpform.prepend($response);
        }

    </script>
@endsection