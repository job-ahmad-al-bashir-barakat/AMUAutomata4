
@section('_aside_menu_admin')

    <li class="nav-heading ">
        <span data-localize="sidebar.heading.AUTOMATA4_ADMIN">Automata4 Admin</span>
    </li>

    <li class="">
        <a href="#univercity" title="Univercity" data-toggle="collapse" class="" aria-expanded="true">
            <em class="icon-cup"></em>
            <span data-localize="sidebar.nav.extra.UNIVERCITY">Univercity</span>
        </a>
        <ul id="univercity" class="nav sidebar-subnav collapse in" aria-expanded="true">
            <li class="sidebar-subnav-header">Univercity</li>

            <li class="">
                <a href="{{ localizeURL('admin/faculties') }}" class="ajax" title="Faculties">
                    <span>Faculties</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/degrees') }}" class="ajax" title="Degrees">
                    <span>Degrees</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('admin/departments') }}" class="ajax" title="Departments">
                    <span>Departments</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#persons" title="Persons" data-toggle="collapse" class="collapsed" aria-expanded="false">
            <em class="icon-people"></em>
            <span data-localize="sidebar.nav.form.Persons">Persons</span>
        </a>

        <ul id="persons" class="nav sidebar-subnav collapse" aria-expanded="false" style="height: 0;">
            <li class="sidebar-subnav-header">Persons</li>
            <li class="">
                <a href="{{ localizeURL('admin/university-council') }}" class="ajax" title="University Council">
                    <span data-localize="sidebar.nav.form.UNIVERSITY_COUNCIL">University Council</span>
                </a>
            </li>
            <li class="">
                <a href="{{ localizeURL('admin/board-of-trustees') }}" class="ajax" title="Board of Trustees">
                    <span data-localize="sidebar.nav.form.BOARD_OF_TRUSTEES">Board of Trustees</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/blog') }}" class="ajax" title="Blog">
            <div class="pull-right label label-info">3</div>
            <em class="icon-feed"></em>
            <span data-localize="sidebar.nav.form.Blog">Blog</span>
        </a>
    </li>

@endsection

@section('_aside_setting_admin')

    <li class="">
        <a href="{{ localizeURL('admin/study-years') }}" class="ajax" title="Study Years">
            <span>Study Years</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/semesters') }}" class="ajax" title="Semesters">
            <span>Semesters</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('admin/positions') }}" class="ajax" title="Position">
            <span data-localize="sidebar.nav.form.POSITION">Position</span>
        </a>
    </li>
    <li class="">
        <a href="{{ localizeURL('admin/job-titles') }}" class="ajax" title="Job Title">
            <span data-localize="sidebar.nav.form.JOB_TITLE">Job Title</span>
        </a>
    </li>

@endsection