@section('_aside_menu_admin')

    <li class="nav-heading ">
        <span>{{ trans('admin::app.automata4_admin') }}</span>
    </li>
    @if(auth()->user()->hasAnyPermission([
        'campuses',
        'faculties',
        'departments',
        'degrees',
        'study-plan',
        'hierarchy',
        'offices',
        'partners',
    ]))
    <li class="">
        <a href="#university" title="{{ trans('admin::app.university') }}" data-toggle="collapse" class="">
            <em class="icon-cup"></em>
            <span>{{ trans('admin::app.university') }}</span>
        </a>
        <ul id="university" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('admin::app.university') }}</li>
            @can('campuses')
            <li class="">
                <a href="{{ RouteUrls::campuses() }}" class="ajax" title="{{ trans('admin::app.campuses') }}">
                    <span>{{ trans('admin::app.campuses') }}</span>
                </a>
            </li>
            @endcan
            @can('faculties')
            <li class="">
                <a href="{{ RouteUrls::faculties() }}" class="ajax" title="{{ trans('admin::app.faculties') }}">
                    <span>{{ trans('admin::app.faculties') }}</span>
                </a>
            </li>
            @endcan
            @can('departments')
            <li class="">
                <a href="{{ RouteUrls::departments() }}" class="ajax" title="{{ trans('admin::app.departments') }}">
                    <span>{{ trans('admin::app.departments') }}</span>
                </a>
            </li>
            @endcan
            @can('degrees')
            <li class="">
                <a href="{{ RouteUrls::degrees() }}" class="ajax" title="{{ trans('admin::app.degrees') }}">
                    <span>{{ trans('admin::app.degrees') }}</span>
                </a>
            </li>
            @endcan
            @can('study-plan')
            <li class="">
                <a href="{{ RouteUrls::studyPlan() }}" class="ajax" title="{{ trans('admin::app.study_plan') }}">
                    <span>{{ trans('admin::app.study_plan') }}</span>
                </a>
            </li>
            @endcan
            @can('hierarchy')
            <li class="">
                <a href="{{ RouteUrls::hierarchyMenu() }}" class="ajax" title="{{ trans('admin::app.hierarchy') }}">
                    <span>{{ trans('admin::app.hierarchy') }}</span>
                </a>
            </li>
            @endcan
            @can('offices')
            <li class="">
                <a href="{{ RouteUrls::offices() }}" class="ajax" title="{{ trans('admin::app.offices') }}">
                    <span>{{ trans('admin::app.offices') }}</span>
                </a>
            </li>
            @endcan
            @can('partners')
            <li class="">
                <a href="{{ RouteUrls::partners() }}" class="ajax" title="{{ trans('admin::app.partners') }}">
                    <span>{{ trans('admin::app.partners') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
    @if(auth()->user()->hasAnyPermission([
        'university-council',
        'board-of-trustees',
        'management-staff',
        'staff',
    ]))
    <li class="">
        <a href="#person" title="Persons" data-toggle="collapse">
            <em class="icon-people"></em>
            <span>{{ trans('admin::app.person') }}</span>
        </a>

        <ul id="person" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('admin::app.person') }}</li>
            @can('university-council')
            <li class="">
                <a href="{{ RouteUrls::universityCouncil() }}" class="ajax"
                   title="{{ trans('admin::app.university_council') }}">
                    <span>{{ trans('admin::app.university_council') }}</span>
                </a>
            </li>
            @endcan
            @can('board-of-trustees')
            <li class="">
                <a href="{{ RouteUrls::boardOfTrustees() }}" class="ajax"
                   title="{{ trans('admin::app.board_of_trustees') }}">
                    <span>{{ trans('admin::app.board_of_trustees') }}</span>
                </a>
            </li>
            @endcan
            @can('management-staff')
                <li class="">
                    <a href="{{ RouteUrls::managementStaff() }}" class="ajax" title="{{ trans('admin::app.management_staff') }}">
                        <span>{{ trans('admin::app.management_staff') }}</span>
                    </a>
                </li>
            @endcan
            @can('staff')
            <li class="">
                <a href="{{ RouteUrls::staff() }}" class="ajax" title="{{ trans('admin::app.staff') }}">
                    <span>{{ trans('admin::app.staff') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
    @can('tenders')
        <li class="">
            <a href="{{ RouteUrls::tenders() }}" class="ajax" title="{{ trans('admin::app.tenders') }}">
                <span>{{ trans('admin::app.tenders') }}</span>
            </a>
        </li>
    @endcan
    @if(auth()->user()->hasAnyPermission([
        'news-status',
        'news',
    ]))
    <li class="">
        <a href="#news" title="{{ trans('admin::app.news') }}" data-toggle="collapse" class="">
            <em class="icon-feed"></em>
            <span>{{ trans('admin::app.news') }}</span>
        </a>
        <ul id="news" class="nav sidebar-subnav collapse">
            {{--@can('news-status')--}}
            {{--<li class="">--}}
                {{--<a href="{{ RouteUrls::status() }}" class="ajax" title="{{ trans('admin::app.status') }}">--}}
                    {{--<span>{{ trans('admin::app.status') }}</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}
            @can('news')
            <li class="">
                <a href="{{ RouteUrls::news() }}" class="ajax" title="{{ trans('admin::app.news') }}">
                    <span>{{ trans('admin::app.news') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
@endsection

@section('_aside_setting_admin')
    @can('study-year')
    <li class="">
        <a href="{{ RouteUrls::studyYear() }}" class="ajax" title="{{ trans('admin::app.study_year') }}">
            <span>{{ trans('admin::app.study_year') }}</span>
        </a>
    </li>
    @endcan
    @can('semester')
    <li class="">
        <a href="{{ RouteUrls::semester() }}" class="ajax" title="{{ trans('admin::app.semester') }}">
            <span>{{ trans('admin::app.semester') }}</span>
        </a>
    </li>
    @endcan
    @can('hierarchy-type')
    <li class="">
        <a href="{{ RouteUrls::hierarchyType() }}" class="ajax" title="{{ trans('admin::app.hierarchy_type') }}">
            <span>{{ trans('admin::app.hierarchy_type') }}</span>
        </a>
    </li>
    @endcan
@endsection