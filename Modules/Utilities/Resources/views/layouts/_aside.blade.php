
@section('_aside_menu_utilities')

    <li class="nav-heading ">
        <span data-localize="sidebar.heading.AUTOMATA4_UTILITIES">Automata4 Utilities</span>
    </li>
    <li class=" ">
        <a href="#global" title="Global" data-toggle="collapse">
            <div class="pull-right label label-info">3</div>
            <em class="icon-grid"></em>
            <span data-localize="sidebar.nav.GLOBAL">Global</span>
        </a>
        <ul id="global" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">Global</li>
            <li class="">
                <a href="{{ RouteUrls::langs() }}" class="ajax" title="Langs">
                    <span>Langs</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::users() }}" class="ajax" title="Users">
                    <span>Users</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::attributes() }}" class="ajax"  title="Attributes">
                    <span>Attributes</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::modules() }}" class="ajax" title="Modules">
                    <span>Modules</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::customModules() }}" class="ajax" title="Custom Modules">
                    <span>Custom Modules</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::menus() }}" class="ajax" title="Menus">
                    <span>Menus</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#menus" title="Menus" data-toggle="collapse" class="" aria-expanded="true">
            <em class="icon-layers"></em>
            <span data-localize="sidebar.nav.extra.MENUS">Menus</span>
        </a>
        <ul id="menus" class="nav sidebar-subnav collapse in" aria-expanded="true">
            <li class="sidebar-subnav-header">Menus</li>

            <li class="">
                <a href="{{ localizeURL('utilities/general/menu') }}" class="ajax" title="General">
                    <span>General</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('utilities/control/menu') }}" class="ajax" title="Control">
                    <span>Control</span>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('_aside_setting_utilities')

    <li class="">
        <a href="{{ localizeURL('utilities/settings') }}" class="ajax" title="Settings">
            <span data-localize="sidebar.nav.form.SETTINGS">Settings</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/social-networks') }}" class="ajax" title="Social Network">
            <span data-localize="sidebar.nav.form.SOCIAL_NETWORK">Social Network</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/genders') }}" class="ajax" title="Gender">
            <span data-localize="sidebar.nav.form.GENDER">Gender</span>
        </a>
    </li>

@endsection