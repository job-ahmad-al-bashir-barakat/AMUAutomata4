@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' => trans('admin::app.study_plan')])
@endsection

@section('content')
        <div class="row">

            <div class="col-lg-3 col-xs-12 pull-right">
                @component('controle.component.panel' ,[
                      'title' => 'Filter Courses',
                      'class' => 'footer'
                ])
                    {{ Form::model(isset($modal) ? $modal : [] ,['class' => 'form-horizontal']) }}
                    <div class="col-lg-12">
                        {{ Form::bsAutocomplete(trans('admin::app.faculty') ,'faculty' ,'faculty' ,'autocomplete/faculty' ,[] ,'3' ,'group') }}
                        {{ Form::bsAutocomplete(trans('admin::app.department') ,'department' ,'department' ,'autocomplete/department' ,[] ,'3' ,'group') }}
                        {{ Form::bsAutocomplete(trans('admin::app.degree') ,'degree' ,'degree' ,'autocomplete/degree' ,[] ,'3' ,'group') }}
                    </div>
                    {{ Form::close() }}

                    @slot('footer')
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary filter-courses">{{ trans('app.filter') }}</button>
                        </div>
                    @endslot
                @endcomponent
            </div>

            <div class="col-lg-9 col-xs-12">
                <h4>Courses</h4>
                <div class="box-placeholder p-5">
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">KokoKoko YY</button>
                    <button class="btn btn-primary btn-xs m-5">KokoKokoKoko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">KokoKokoKoko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                    <button class="btn btn-primary btn-xs m-5">Koko YY</button>
                </div>
            </div>

            <div class="col-lg-9 col-xs-12">
                @component('controle.component.panel' ,[
                      'title' => trans('admin::app.study_plan'),
                      'class' => 'footer',
                ])
                    @foreach($semester as $index => $item)
                        <h4>{{ $item->lang_name['en']['text'] }}</h4>
                        <div class="box-placeholder">


                        </div>
                    @endforeach

                    @slot('footer')
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">{{ trans('app.save') }}</button>
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
@endsection