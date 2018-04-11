@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' => trans('admin::app.study_plan')])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            {!! FormComponent::ajaxContOpen() !!}
                {!! FormComponent::setAjax(true)->setStopOperationMessage(true)->onSuccess('studyPlanSuccess')->formOpen('form-search','get',RouteUrls::studyPlanCreate(),'form-horizontal') !!}
                    @component('controle.component.panel' ,[
                          'title' => trans('admin::app.study_plan'),
                          'class' => 'footer'
                    ])
                        <div class="form-group">
                            <div class="col-lg-12">
                                {!! FormComponent::formGroup(false)->autocomplete(trans('admin::app.faculty') ,'faculty' ,'faculty' ,'autocomplete/faculty' ,[] ,'0' ,'c:col-lg-4 c:col-xs-12 required') !!}
                                {!! FormComponent::formGroup(false)->autocomplete(trans('admin::app.study_year') ,'study-year' ,'study-year' ,'autocomplete/faculty-study-year' ,[] ,'0' ,'c:col-lg-4 c:col-xs-12 required' ,['data-param' => '#faculty']) !!}
                                {!! FormComponent::formGroup(false)->autocomplete(trans('admin::app.degree') ,'degree' ,'degree' ,'autocomplete/degree' ,[] ,'0' ,'c:col-lg-4 c:col-xs-12' ,['data-param' => '#faculty']) !!}
                            </div>
                        </div>
                        @slot('footer')
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary filter-courses">{{ trans('app.filter') }}</button>
                            </div>
                        @endslot
                    @endcomponent
                {!! FormComponent::formClose() !!}
            {!! FormComponent::ajaxContClose() !!}
        </div>
        <div class="study-plan"></div>
    </div>
@endsection

@section('footer')
    <script>

        function studyPlanSuccess(form ,res) {

            $('.study-plan').html(res.study_plan);

            AUT_FORM_COMPONENT.validate.init('.ajaxCont');

            var containers = $('.destination').toArray();
            containers = containers.concat($('#target').toArray());

            // init dragula
            var drake = dragula({
                containers: containers,

            });

            drake.on ('dragend' ,function (el) {

                var el = $(el),
                    destination = el.closest('.destination'),
                    semester = destination.data('semester'),
                    course   = el.data('course'),
                    _delete  = $('.delete-study-plan');

                el.find('.semester').remove();

                if(semester)
                    el.append('<input class="semester" type=hidden name="study-plan[' + course + '][semester_id]" value="' + semester + '">')


                if(destination.length)
                    _delete.find('[value="' + course + '"]').remove();
                else
                    _delete.append('<input type="hidden" name="delete[' + course + ']" value="' + course + '">')
            });
        }
    </script>
@endsection