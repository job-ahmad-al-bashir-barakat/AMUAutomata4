<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="col-md-{{ $data['width'] }}">
    @include('utilities::web-modules.modules.sub.title', ['h' => 3, 'title'=> $data['title'][$lang]])
    <form id="contact_form">
        <div class="row">
            <div class="col-sm-4">
                <label for="label_number">{{trans('utilities::web-modules.label_number')}}</label>
                <div class="form-group">
                    <input id="label_number" name="label_number" class="form-control" type="text" placeholder="CH-000000000" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
            </div>
        </div>
        <div class="validate_errors alert alert-danger hide"></div>
        <div class="form-group">
            <button type="submit"
                    data-method="post"
                    class="btn-submit btn btn-flat btn-theme-colored mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">{{trans('utilities::web-modules.check')}}
            </button>
        </div>
    </form>
</div>
<div class="modal fade" id="labelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{trans('utilities::web-modules.check_certificate')}}</h4>
            </div>
            <div class="modal-body">
                <div class="mr-10">
                <div class="row">
                    <div  class="form-group">{{trans('utilities::web-modules.student_name')}} :<span id="stdName"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.father_name')}} :<span id="fatherName"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.mother_name')}} :<span id="motherName"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.birth_date')}} :<span id="birthDate"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.degree')}} :<span id="degree"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.avg')}} :<span id="stdAvg"></span></div>
                </div>
                <div class="row">
                    <div class="form-group">{{trans('utilities::web-modules.evaluation')}} :<span id="evaluation"></span></div>
                </div>
                </div>
                <div class="row">
                    <iframe  height='850px' type="application/pdf" class="documentImage"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('app.close')}}</button>
            </div>
        </div>
    </div>
</div>
<script>
//    $.ajaxSetup({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        }
//    });
    function _fillStdData(data){
        $('#stdName').text(data.HolderName);
        $('#fatherName').text(data.HolderFatherName);
        $('#motherName').text(data.HolderMotherName);
        $('#birthDate').text(data.HolderBirthDate);
        $('#degree').text(data.DocumentDegree);
        $('#stdAvg').text(data.DocumentAverage);
        $('#evaluation').text(data.DocumentEvaluation);
        $('.documentImage').attr('src','data:application/pdf;base64,'+data.DocumentImage);
        $('#labelModal').modal('show');
    }
    $(".btn-submit").click(function(e){
        e.preventDefault();
        $('.validate_errors').addClass('hide').html('');
        var labelNum = $('#label_number').val();
        $('#preloader').show();
        $.ajax({
            type:'POST',
            url:'check-certificate',
            data:{'label_number':labelNum,'g-recaptcha-response':grecaptcha.getResponse()},
            error:function(errorData){
                var errors = '';
                $.each(errorData.responseJSON.errors,function(key,error){
                    errors += '<li>'+error+'</li>';
                });
                $('.validate_errors').removeClass('hide').html(errors);
                grecaptcha.reset();
            },
            success:function(data){
                var response = JSON.parse(data);
                if(response.DocumentFound)
                    _fillStdData(response);
                else
                    $('.validate_errors').removeClass('hide').html('<li>'+response.Notes+'</li>');
                grecaptcha.reset();
            },
            complete:function(){$('#preloader').hide();}
        });
    });
</script>