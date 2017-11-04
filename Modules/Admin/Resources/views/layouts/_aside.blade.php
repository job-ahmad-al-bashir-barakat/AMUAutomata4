
@section('_aside_menu_admin')

    <li class="nav-heading ">
        <span>{{ trans('admin::app.automata4_admin') }}</span>
    </li>

    <li class="">
        <a href="#university" title="{{ trans('admin::app.university') }}" data-toggle="collapse" class="">
            <em class="icon-cup"></em>
            <span>{{ trans('admin::app.university') }}</span>
        </a>
        <ul id="university" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('admin::app.university') }}</li>

            <li class="">
                <a href="{{ RouteUrls::faculties() }}" class="ajax" title="{{ trans('admin::app.faculties') }}">
                    <span>{{ trans('admin::app.faculties') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::departments() }}" class="ajax" title="{{ trans('admin::app.departments') }}">
                    <span>{{ trans('admin::app.departments') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::degrees() }}" class="ajax" title="{{ trans('admin::app.degrees') }}">
                    <span>{{ trans('admin::app.degrees') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::studyPlan() }}" class="ajax" title="{{ trans('admin::app.study_plan') }}">
                    <span>{{ trans('admin::app.study_plan') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::hierarchyMenu() }}" class="ajax" title="{{ trans('admin::app.hierarchy') }}">
                    <span>{{ trans('admin::app.hierarchy') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::offices() }}" class="ajax" title="{{ trans('admin::app.offices') }}">
                    <span>{{ trans('admin::app.offices') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::partners() }}" class="ajax" title="{{ trans('admin::app.partners') }}">
                    <span>{{ trans('admin::app.partners') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#person" title="Persons" data-toggle="collapse">
            <em class="icon-people"></em>
            <span>{{ trans('admin::app.person') }}</span>
        </a>

        <ul id="person" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('admin::app.person') }}</li>
            <li class="">
                <a href="{{ RouteUrls::universityCouncil() }}" class="ajax" title="{{ trans('admin::app.university_council') }}">
                    <span>{{ trans('admin::app.university_council') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::boardOfTrustees() }}" class="ajax" title="{{ trans('admin::app.board_of_trustees') }}">
                    <span>{{ trans('admin::app.board_of_trustees') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::staff() }}" class="ajax" title="{{ trans('admin::app.staff') }}">
                    <span>{{ trans('admin::app.staff') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="{{ RouteUrls::blog() }}" class="ajax" title="{{ trans('admin::app.blog') }}">
            {{--<div class="pull-right label label-info">3</div>--}}
            <em class="icon-feed"></em>
            <span>{{ trans('admin::app.blog') }}</span>
        </a>
    </li>

@endsection

@section('_aside_setting_admin')

    <li class="">
        <a href="{{ RouteUrls::studyYear() }}" class="ajax" title="{{ trans('admin::app.study_year') }}">
            <span>{{ trans('admin::app.study_year') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ RouteUrls::semester() }}" class="ajax" title="{{ trans('admin::app.semester') }}">
            <span>{{ trans('admin::app.semester') }}</span>
        </a>
    </li>


    <li class="">
        <a href="{{ RouteUrls::hierarchyType() }}" class="ajax" title="{{ trans('admin::app.hierarchy_type') }}">
            <span>{{ trans('admin::app.hierarchy_type') }}</span>
        </a>
    </li>

@endsection