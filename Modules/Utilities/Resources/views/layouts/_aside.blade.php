
@section('_aside_menu_utilities')

    <li class="nav-heading ">
        <span>{{ trans('utilities::app.automata4_utilities') }}</span>
    </li>
    <li class=" ">
        <a href="#global" title="{{ trans('utilities::app.global') }}" data-toggle="collapse">
            <em class="icon-grid"></em>
            <span>{{ trans('utilities::app.global') }}</span>
        </a>
        <ul id="global" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.global') }}</li>
            {{--@if(auth()->user()->hasAnyPermission([config('automata-permission.automata.permission'), config('automata-permission.administrator.permission'), 'languages']))--}}
            @can('languages')
            <li class="">
                <a href="{{ RouteUrls::langs() }}" class="ajax" title="{{ trans('utilities::app.langs') }}">
                    <span>{{ trans('utilities::app.langs') }}</span>
                </a>
            </li>
            @endcan
            @can(config('automata-permission.automata.permission'))
            <li class="">
                <a href="{{ RouteUrls::schemaTables() }}" class="ajax" title="{{ trans('utilities::app.schema-tables') }}">
                    <span>{{ trans('utilities::app.schema-tables') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::tables() }}" class="ajax" title="{{ trans('utilities::app.tables') }}">
                    <span>{{ trans('utilities::app.tables') }}</span>
                </a>
            </li>
            @endcan
            <li class="">
                <a href="{{ RouteUrls::icons() }}" class="ajax" title="{{ trans('utilities::app.icons') }}">
                    <span>{{ trans('utilities::app.icons') }}</span>
                </a>
            </li>
            @can(config('automata-permission.automata.permission'))
            <li class="">
                <a href="{{ RouteUrls::attributes() }}" class="ajax"  title="{{ trans('utilities::app.attributes') }}">
                    <span>{{ trans('utilities::app.attributes') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::modules() }}" class="ajax" title="{{ trans('utilities::app.modules') }}">
                    <span>{{ trans('utilities::app.modules') }}</span>
                </a>
            </li>
            @endcan
            <li class="">
                <a href="{{ RouteUrls::pages() }}" class="ajax" title="{{ trans('utilities::app.pages') }}">
                    <span>{{ trans('utilities::app.pages') }}</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#menus" title="{{ trans('utilities::app.menus') }}" data-toggle="collapse" class="">
            <em class="icon-layers"></em>
            <span>{{ trans('utilities::app.menus') }}</span>
        </a>
        <ul id="menus" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.menus') }}</li>

            <li class="">
                <a href="{{ RouteUrls::generalMenu() }}" class="ajax" title="{{ trans('utilities::app.general') }}">
                    <span>{{ trans('utilities::app.general') }}</span>
                </a>
            </li>
            @can(config('automata-permission.automata.permission'))
            <li class="">
                <a href="{{ RouteUrls::controlMenu() }}" class="ajax" title="{{ trans('utilities::app.control') }}">
                    <span>{{ trans('utilities::app.control') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::menuTables() }}" class="ajax" title="{{ trans('utilities::app.menu_tables') }}">
                    <span>{{ trans('utilities::app.menu_tables') }}</span>
                </a>
            </li>
            @endcan
        </ul>
    </li>
    <li class="">
        <a href="#users-auth" title="{{ trans('utilities::app.auth') }}" data-toggle="collapse" class="">
            <em class="icon-people"></em>
            <span>{{ trans('utilities::app.auth') }}</span>
        </a>
        <ul id="users-auth" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.auth') }}</li>
            @can(config('automata-permission.automata.permission'))
            <li class="">
                <a href="{{ RouteUrls::permissions() }}" class="ajax" title="{{ trans('utilities::app.permissions') }}">
                    <span>{{ trans('utilities::app.permissions') }}</span>
                </a>
            </li>
            @endcan
            <li class="">
                <a href="{{ RouteUrls::roles() }}" class="ajax" title="{{ trans('utilities::app.roles') }}">
                    <span>{{ trans('utilities::app.roles') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::users() }}" class="ajax" title="{{ trans('utilities::app.users') }}">
                    <span>{{ trans('utilities::app.users') }}</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#builder" title="{{ trans('utilities::app.builder') }}" data-toggle="collapse" class="">
            <em class="icon-puzzle"></em>
            <span>{{ trans('utilities::app.builder') }}</span>
        </a>
        <ul id="builder" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header">{{ trans('utilities::app.builder') }}</li>

            <li class="">
                <a href="{{ RouteUrls::sliders() }}" class="ajax" title="{{ trans('utilities::app.sliders') }}">
                    <span>{{ trans('utilities::app.sliders') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::verticalSliders() }}" class="ajax" title="{{ trans('utilities::app.vertical-sliders') }}">
                    <span>{{ trans('utilities::app.vertical-sliders') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::blocks() }}" class="ajax" title="{{ trans('utilities::app.blocks') }}">
                    <span>{{ trans('utilities::app.blocks') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::steps() }}" class="ajax" title="{{ trans('utilities::app.steps') }}">
                    <span>{{ trans('utilities::app.steps') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::textCards() }}" class="ajax" title="{{ trans('utilities::app.text-cards') }}">
                    <span>{{ trans('utilities::app.text-cards') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::customModules() }}" class="ajax" title="{{ trans('utilities::app.custom_modules') }}">
                    <span>{{ trans('utilities::app.custom_modules') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ RouteUrls::builderPages() }}" class="ajax" title="{{ trans('utilities::app.pages') }}">
                    <span>{{ trans('utilities::app.pages') }}</span>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('_aside_setting_utilities')
    @can(config('automata-permission.automata.permission'))
    <li class="">
        <a href="{{ RouteUrls::generalSetting() }}" class="ajax" title="{{ trans('utilities::app.general_setting') }}">
            <span>{{ trans('utilities::app.general_setting') }}</span>
        </a>
    </li>
    @endcan
    <li class="">
        <a href="{{ RouteUrls::socialNetwork() }}" class="ajax" title="{{ trans('utilities::app.social_network') }}">
            <span>{{ trans('utilities::app.social_network') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ RouteUrls::gender() }}" class="ajax" title="{{ trans('utilities::app.gender') }}">
            <span>{{ trans('utilities::app.gender') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ RouteUrls::position() }}" class="ajax" title="{{ trans('utilities::app.position') }}">
            <span>{{ trans('utilities::app.position') }}</span>
        </a>
    </li>
    <li class="">
        <a href="{{ RouteUrls::jobTitle() }}" class="ajax" title="{{  trans('utilities::app.job_title') }}">
            <span>{{  trans('utilities::app.job_title') }}</span>
        </a>
    </li>
@endsection