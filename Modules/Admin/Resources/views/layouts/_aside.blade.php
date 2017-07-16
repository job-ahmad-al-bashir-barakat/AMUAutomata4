
@section('_aside_menu_admin')

    <li class="nav-heading ">
        <span data-localize="sidebar.automata4_admin">{{ trans('admin::app.automata4_admin') }}</span>
    </li>

    <li class="">
        <a href="#univercity" title="{{ trans('admin::app.univercity') }}" data-toggle="collapse" class="" aria-expanded="true">
            <em class="icon-cup"></em>
            <span data-localize="sidebar.univercity">{{ trans('admin::app.univercity') }}</span>
        </a>
        <ul id="univercity" class="nav sidebar-subnav collapse in" aria-expanded="true">
            <li class="sidebar-subnav-header" data-localize="sidebar.univercity">{{ trans('admin::app.univercity') }}</li>

            <li class="">
                <a href="{{ localizeURL('admin/faculties') }}" class="ajax" title="{{ trans('admin::app.faculties') }}">
                    <span data-localize="sidebar.faculties">{{ trans('admin::app.faculties') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/degrees') }}" class="ajax" title="{{ trans('admin::app.degrees') }}">
                    <span data-localize="sidebar.degrees">{{ trans('admin::app.degrees') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/departments') }}" class="ajax" title="{{ trans('admin::app.departments') }}">
                    <span data-localize="sidebar.departments">{{ trans('admin::app.departments') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#person" title="Persons" data-toggle="collapse" class="collapsed" aria-expanded="false">
            <em class="icon-people"></em>
            <span data-localize="sidebar.person">{{ trans('admin::app.person') }}</span>
        </a>

        <ul id="person" class="nav sidebar-subnav collapse" aria-expanded="false" style="height: 0;">
            <li class="sidebar-subnav-header" data-localize="sidebar.person">{{ trans('admin::app.person') }}</li>
            <li class="">
                <a href="{{ localizeURL('admin/university-council') }}" class="ajax" title="{{ trans('admin::app.university_council') }}">
                    <span data-localize="sidebar.university_council">{{ trans('admin::app.university_council') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ localizeURL('admin/board-of-trustees') }}" class="ajax" title="{{ trans('admin::app.board_of_trustees') }}">
                    <span data-localize="sidebar.board_of_trustees">{{ trans('admin::app.board_of_trustees') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/blog') }}" class="ajax" title="{{ trans('admin::app.blog') }}">
            {{--<div class="pull-right label label-info">3</div>--}}
            <em class="icon-feed"></em>
            <span data-localize="sidebar.blog">{{ trans('admin::app.blog') }}</span>
        </a>
    </li>

@endsection

@section('_aside_setting_admin')

    <li class="">
        <a href="{{ localizeURL('admin/study-year') }}" class="ajax" title="{{ trans('admin::app.study_year') }}">
            <span data-localize="sidebar.study_year">{{ trans('admin::app.study_year') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/semester') }}" class="ajax" title="{{ trans('admin::app.semester') }}">
            <span data-localize="sidebar.semester">{{ trans('admin::app.semester') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/position') }}" class="ajax" title="{{ trans('admin::app.position') }}">
            <span data-localize="sidebar.position">{{ trans('admin::app.position') }}</span>
        </a>
    </li>
    <li class="">
        <a href="{{ localizeURL('admin/job-title') }}" class="ajax" title="{{  trans('admin::app.job_title') }}">
            <span data-localize="sidebar.job_title">{{  trans('admin::app.job_title') }}</span>
        </a>
    </li>

@endsection