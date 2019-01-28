@section('_aside_menu_utilities')
    <li class="nav-heading ">
        <span>{{ trans('utilities::app.automata4_utilities') }}</span>
    </li>
    @if(auth()->user()->hasAnyPermission([
        'languages',
        'translation-manager',
        'schema-tables',
        'tables',
        'icons',
        'attributes',
        'modules',
        'show-modules',
        'pages',
    ]))
    <li class=" ">
        <a href="#global" title="{{ trans('utilities::app.global') }}" data-toggle="collapse">
            <em class="icon-grid"></em>
            <span>{{ trans('utilities::app.global') }}</span>
        </a>
        <ul id="global" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.global') }}</li>
            @can('languages')
            <li class="">
                <a href="{{ RouteUrls::langs() }}" class="ajax" title="{{ trans('utilities::app.langs') }}">
                    <span>{{ trans('utilities::app.langs') }}</span>
                </a>
            </li>
            @endcan
            @can('translation-manager')
                <li class="">
                    <a href="{{ RouteUrls::translationManager() }}" class="ajax" title="{{ trans('utilities::app.translation_manager') }}">
                        <span>{{ trans('utilities::app.translation_manager') }}</span>
                    </a>
                </li>
            @endcan
            @can('schema-tables')
            <li class="">
                <a href="{{ RouteUrls::schemaTables() }}" class="ajax" title="{{ trans('utilities::app.schema-tables') }}">
                    <span>{{ trans('utilities::app.schema-tables') }}</span>
                </a>
            </li>
            @endcan
            @can('tables')
            <li class="">
                <a href="{{ RouteUrls::tables() }}" class="ajax" title="{{ trans('utilities::app.tables') }}">
                    <span>{{ trans('utilities::app.tables') }}</span>
                </a>
            </li>
            @endcan
            @can('icons')
            <li class="">
                <a href="{{ RouteUrls::icons() }}" class="ajax" title="{{ trans('utilities::app.icons') }}">
                    <span>{{ trans('utilities::app.icons') }}</span>
                </a>
            </li>
            @endcan
            @can('attributes')
            <li class="">
                <a href="{{ RouteUrls::attributes() }}" class="ajax"  title="{{ trans('utilities::app.attributes') }}">
                    <span>{{ trans('utilities::app.attributes') }}</span>
                </a>
            </li>
            @endcan
            @can('modules')
            <li class="">
                <a href="{{ RouteUrls::modules() }}" class="ajax" title="{{ trans('utilities::app.modules') }}">
                    <span>{{ trans('utilities::app.modules') }}</span>
                </a>
            </li>
            @endcan
            @can('show-modules')
            <li class="">
                <a href="{{ RouteUrls::showModules() }}" class="ajax" title="{{ trans('utilities::app.show-modules') }}">
                    <span>{{ trans('utilities::app.show-modules') }}</span>
                </a>
            </li>
            @endcan
            @can('pages')
            <li class="">
                <a href="{{ RouteUrls::pages() }}" class="ajax" title="{{ trans('utilities::app.pages') }}">
                    <span>{{ trans('utilities::app.pages') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
    @if(auth()->user()->hasAnyPermission([
        'website-menu',
        'control-panel-menu',
    ]))
    <li class="">
        <a href="#menus" title="{{ trans('utilities::app.menus') }}" data-toggle="collapse" class="">
            <em class="icon-layers"></em>
            <span>{{ trans('utilities::app.menus') }}</span>
        </a>
        <ul id="menus" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.site-menu') }}</li>
            {{--<li class="">
                <a href="{{ RouteUrls::siteMenu() }}" class="ajax" title="{{ trans('utilities::app.site-menu') }}">
                    <span>{{ trans('utilities::app.site-menu') }}</span>
                </a>
            </li>--}}
            @can('website-menu')
            <li class="">
                <a href="{{ RouteUrls::listMenu() }}" class="ajax" title="{{ trans('utilities::app.list') }}">
                    <span>{{ trans('utilities::app.list') }}</span>
                </a>
            </li>
            @endcan
            @can('control-panel-menu')
            <li class="">
                <a href="{{ RouteUrls::controlMenu() }}" class="ajax" title="{{ trans('utilities::app.control') }}">
                    <span>{{ trans('utilities::app.control') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
    @if(auth()->user()->hasAnyPermission([
        'permissions',
        'roles',
        'users',
    ]))
    <li class="">
        <a href="#users-auth" title="{{ trans('utilities::app.auth') }}" data-toggle="collapse" class="">
            <em class="icon-people"></em>
            <span>{{ trans('utilities::app.auth') }}</span>
        </a>
        <ul id="users-auth" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.auth') }}</li>
            @can('permissions')
            <li class="">
                <a href="{{ RouteUrls::permissions() }}" class="ajax" title="{{ trans('utilities::app.permissions') }}">
                    <span>{{ trans('utilities::app.permissions') }}</span>
                </a>
            </li>
            @endcan
            @can('roles')
            <li class="">
                <a href="{{ RouteUrls::roles() }}" class="ajax" title="{{ trans('utilities::app.roles') }}">
                    <span>{{ trans('utilities::app.roles') }}</span>
                </a>
            </li>
            @endcan
            @can('users')
            <li class="">
                <a href="{{ RouteUrls::users() }}" class="ajax" title="{{ trans('utilities::app.users') }}">
                    <span>{{ trans('utilities::app.users') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
    @if(auth()->user()->hasAnyPermission([
        'sliders',
        'vertical-sliders',
        'blocks',
        'cards',
        'links',
        'steps',
        'text-cards',
        'galleries',
        'calendar',
        'footer',
        'custom-modules',
        'page-builder',
    ]))
    <li class="">
        <a href="#builder" title="{{ trans('utilities::app.builder') }}" data-toggle="collapse" class="">
            <em class="icon-puzzle"></em>
            <span>{{ trans('utilities::app.builder') }}</span>
        </a>
        <ul id="builder" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.builder') }}</li>
            @can('sliders')
            <li class="">
                <a href="{{ RouteUrls::sliders() }}" class="ajax" title="{{ trans('utilities::app.sliders') }}">
                    <span>{{ trans('utilities::app.sliders') }}</span>
                </a>
            </li>
            @endcan
            @can('vertical-sliders')
            <li class="">
                <a href="{{ RouteUrls::verticalSliders() }}" class="ajax" title="{{ trans('utilities::app.vertical-sliders') }}">
                    <span>{{ trans('utilities::app.vertical-sliders') }}</span>
                </a>
            </li>
            @endcan
            @can('blocks')
            <li class="">
                <a href="{{ RouteUrls::blocks() }}" class="ajax" title="{{ trans('utilities::app.blocks') }}">
                    <span>{{ trans('utilities::app.blocks') }}</span>
                </a>
            </li>
            @endcan
            @can('cards')
            <li class="">
                <a href="{{ RouteUrls::cards() }}" class="ajax" title="{{ trans('utilities::app.cards') }}">
                    <span>{{ trans('utilities::app.cards') }}</span>
                </a>
            </li>
            @endcan
            @can('links')
            <li class="">
                <a href="{{ RouteUrls::links() }}" class="ajax" title="{{ trans('utilities::app.links') }}">
                    <span>{{ trans('utilities::app.links') }}</span>
                </a>
            </li>
            @endcan
            @can('steps')
            <li class="">
                <a href="{{ RouteUrls::steps() }}" class="ajax" title="{{ trans('utilities::app.steps') }}">
                    <span>{{ trans('utilities::app.steps') }}</span>
                </a>
            </li>
            @endcan
            @can('text-cards')
            <li class="">
                <a href="{{ RouteUrls::textCards() }}" class="ajax" title="{{ trans('utilities::app.text-cards') }}">
                    <span>{{ trans('utilities::app.text-cards') }}</span>
                </a>
            </li>
            @endcan
            @can('galleries')
            <li class="">
                <a href="{{ RouteUrls::galleries() }}" class="ajax" title="{{ trans('utilities::app.galleries') }}">
                    <span>{{ trans('utilities::app.galleries') }}</span>
                </a>
            </li>
            @endcan
            @can('calendar')
            <li class="">
                <a href="{{ RouteUrls::eventGroups() }}" class="ajax" title="{{ trans('utilities::app.calender') }}">
                    <span>{{ trans('utilities::app.calender') }}</span>
                </a>
            </li>
            @endcan
            @can('footer')
            <li class="">
                <a href="{{ RouteUrls::footers() }}" class="ajax" title="{{ trans('utilities::app.footers') }}">
                    <span>{{ trans('utilities::app.footers') }}</span>
                </a>
            </li>
            @endcan
            @can('custom-modules')
            <li class="">
                <a href="{{ RouteUrls::customModules() }}" class="ajax" title="{{ trans('utilities::app.custom_modules') }}">
                    <span>{{ trans('utilities::app.custom_modules') }}</span>
                </a>
            </li>
            @endcan
            @can('page-builder')
            <li class="">
                <a href="{{ RouteUrls::builderPages() }}" class="ajax" title="{{ trans('utilities::app.pages-content') }}">
                    <span>{{ trans('utilities::app.pages-content') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endif
@endsection

@section('_aside_setting_utilities')
    @can('general-setting')
    <li class="">
        <a href="{{ RouteUrls::generalSetting() }}" class="ajax" title="{{ trans('utilities::app.general_setting') }}">
            <span>{{ trans('utilities::app.general_setting') }}</span>
        </a>
    </li>
    @endcan
    @can('social-network')
    <li class="">
        <a href="{{ RouteUrls::socialNetwork() }}" class="ajax" title="{{ trans('utilities::app.social_network') }}">
            <span>{{ trans('utilities::app.social_network') }}</span>
        </a>
    </li>
    @endcan
    @can('gender')
    <li class="">
        <a href="{{ RouteUrls::gender() }}" class="ajax" title="{{ trans('utilities::app.gender') }}">
            <span>{{ trans('utilities::app.gender') }}</span>
        </a>
    </li>
    @endcan
    @can('position')
    <li class="">
        <a href="{{ RouteUrls::position() }}" class="ajax" title="{{ trans('utilities::app.position') }}">
            <span>{{ trans('utilities::app.position') }}</span>
        </a>
    </li>
    @endcan
    @can('job-title')
    <li class="">
        <a href="{{ RouteUrls::jobTitle() }}" class="ajax" title="{{  trans('utilities::app.job_title') }}">
            <span>{{  trans('utilities::app.job_title') }}</span>
        </a>
    </li>
    @endcan
@endsection