@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' => trans('admin::app.study_plan')])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="ajaxCont">
                {!! Form::open(['id' => 'form-search' ,'url' => RouteUrls::studyPlanCreate(), 'method' => 'get' ,'class' => 'form-horizontal  ajax-form']) !!}
                    @component('controle.component.panel' ,[
                          'title' => trans('admin::app.filter_study_plan'),
                          'class' => 'footer'
                    ])
                        <div class="form-group">
                            <div class="col-lg-12">
                                {{ Form::bsAutocomplete(trans('admin::app.faculty') ,'faculty' ,'faculty' ,'autocomplete/faculty' ,[] ,'0' ,'c:col-xs-3 required' ,['data-placeholder' => trans('admin::app.faculty')]) }}
                                {{ Form::bsAutocomplete(trans('admin::app.study_year') ,'study-year' ,'study-year' ,'autocomplete/faculty-study-year' ,[] ,'0' ,'c:col-xs-3 required' ,['data-placeholder' => trans('admin::app.study_year') ,'data-param' => '#faculty']) }}
                                {{ Form::bsAutocomplete(trans('admin::app.department') ,'department' ,'department' ,'autocomplete/department' ,[] ,'0' ,'c:col-xs-3 required' ,['data-placeholder' => trans('admin::app.department') ,'data-param' => '#faculty']) }}
                                {{ Form::bsAutocomplete(trans('admin::app.degree') ,'degree' ,'degree' ,'autocomplete/degree' ,[] ,'0' ,'c:col-xs-3' ,['data-placeholder' => trans('admin::app.degree') ,'data-param' => '#faculty']) }}
                            </div>
                        </div>
                        @slot('footer')
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary filter-courses" data-method="get" data-action="{{  RouteUrls::studyPlanCreate() }}" data-stop-operation-message data-ajax-form-success="studyPlanSuccess">{{ trans('app.filter') }}</button>
                            </div>
                        @endslot
                    @endcomponent
                {!! Form::close() !!}
            </div>
        </div>
        <div class="study-plan"></div>
    </div>
@endsection

@section('footer')
    <script>

        function studyPlanSuccess(form ,res) {

            $('.study-plan').html(res.study_plan);

            var containers = $('.destination').toArray();
            containers = containers.concat($('#target').toArray());

            // init form
            APP_AMU.validate.init('.ajaxCont');

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