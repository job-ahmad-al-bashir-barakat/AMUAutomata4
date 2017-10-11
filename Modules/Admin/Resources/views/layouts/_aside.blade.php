
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
                <a href="{{ localizeURL('admin/faculties') }}" class="ajax" title="{{ trans('admin::app.faculties') }}">
                    <span>{{ trans('admin::app.faculties') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/departments') }}" class="ajax" title="{{ trans('admin::app.departments') }}">
                    <span>{{ trans('admin::app.departments') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/degrees') }}" class="ajax" title="{{ trans('admin::app.degrees') }}">
                    <span>{{ trans('admin::app.degrees') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/study-plan') }}" class="ajax" title="{{ trans('admin::app.study_plan') }}">
                    <span>{{ trans('admin::app.study_plan') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/hierarchy/menu') }}" class="ajax" title="{{ trans('admin::app.hierarchy') }}">
                    <span>{{ trans('admin::app.hierarchy') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/offices') }}" class="ajax" title="{{ trans('admin::app.offices') }}">
                    <span>{{ trans('admin::app.offices') }}</span>
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
                <a href="{{ localizeURL('admin/university-council') }}" class="ajax" title="{{ trans('admin::app.university_council') }}">
                    <span>{{ trans('admin::app.university_council') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ localizeURL('admin/board-of-trustees') }}" class="ajax" title="{{ trans('admin::app.board_of_trustees') }}">
                    <span>{{ trans('admin::app.board_of_trustees') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ localizeURL('admin/staff') }}" class="ajax" title="{{ trans('admin::app.staff') }}">
                    <span>{{ trans('admin::app.staff') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/blog') }}" class="ajax" title="{{ trans('admin::app.blog') }}">
            {{--<div class="pull-right label label-info">3</div>--}}
            <em class="icon-feed"></em>
            <span>{{ trans('admin::app.blog') }}</span>
        </a>
    </li>

@endsection

@section('_aside_setting_admin')

    <li class="">
        <a href="{{ localizeURL('admin/study-year') }}" class="ajax" title="{{ trans('admin::app.study_year') }}">
            <span>{{ trans('admin::app.study_year') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/semester') }}" class="ajax" title="{{ trans('admin::app.semester') }}">
            <span>{{ trans('admin::app.semester') }}</span>
        </a>
    </li>


    <li class="">
        <a href="{{ localizeURL('admin/hierarchy-type') }}" class="ajax" title="{{ trans('admin::app.hierarchy_type') }}">
            <span>{{ trans('admin::app.hierarchy_type') }}</span>
        </a>
    </li>

@endsection