
@section('_aside_menu_utilities')

    <li class="nav-heading ">
        <span data-localize="sidebar.automata4_utilities">{{ trans('utilities::app.automata4_utilities') }}</span>
    </li>
    <li class=" ">
        <a href="#global" title="{{ trans('utilities::app.global') }}" data-toggle="collapse">
            {{--<div class="pull-right label label-info">3</div>--}}
            <em class="icon-grid"></em>
            <span data-localize="sidebar.global">{{ trans('utilities::app.global') }}</span>
        </a>
        <ul id="global" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header" data-localize="sidebar.global">{{ trans('utilities::app.global') }}</li>
            <li class="">
                <a href="{{ RouteUrls::langs() }}" class="ajax" title="{{ trans('utilities::app.langs') }}">
                    <span data-localize="sidebar.langs">{{ trans('utilities::app.langs') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::users() }}" class="ajax" title="{{ trans('utilities::app.users') }}">
                    <span data-localize="sidebar.users">{{ trans('utilities::app.users') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::attributes() }}" class="ajax"  title="{{ trans('utilities::app.attributes') }}">
                    <span data-localize="sidebar.attributes">{{ trans('utilities::app.attributes') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::modules() }}" class="ajax" title="{{ trans('utilities::app.modules') }}">
                    <span data-localize="sidebar.modules">{{ trans('utilities::app.modules') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::customModules() }}" class="ajax" title="{{ trans('utilities::app.custom_modules') }}">
                    <span data-localize="sidebar.custom_modules">{{ trans('utilities::app.custom_modules') }}</span>
                </a>
            </li>
            {{--<li class="">
                <a href="{{ RouteUrls::menus() }}" class="ajax" title="Menus">
                    <span>Menus</span>
                </a>
            </li>--}}
        </ul>
    </li>

    <li class="">
        <a href="#menus" title="{{ trans('utilities::app.menus') }}" data-toggle="collapse" class="">
            <em class="icon-layers"></em>
            <span data-localize="sidebar.menus">{{ trans('utilities::app.menus') }}</span>
        </a>
        <ul id="menus" class="nav sidebar-subnav collapse">
            <li class="sidebar-subnav-header" data-localize="sidebar.menus">{{ trans('utilities::app.menus') }}</li>

            <li class="">
                <a href="{{ localizeURL('utilities/general/menu') }}" class="ajax" title="{{ trans('utilities::app.general') }}">
                    <span data-localize="sidebar.general">{{ trans('utilities::app.general') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('utilities/control/menu') }}" class="ajax" title="{{ trans('utilities::app.control') }}">
                    <span data-localize="sidebar.control">{{ trans('utilities::app.control') }}</span>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('_aside_setting_utilities')

    <li class="">
        <a href="{{ localizeURL('utilities/general-setting') }}" class="ajax" title="{{ trans('utilities::app.general_setting') }}">
            <span data-localize="sidebar.general_setting">{{ trans('utilities::app.general_setting') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/social-network') }}" class="ajax" title="{{ trans('utilities::app.social_network') }}">
            <span data-localize="sidebar.social_network">{{ trans('utilities::app.social_network') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/gender') }}" class="ajax" title="{{ trans('utilities::app.gender') }}">
            <span data-localize="sidebar.gender">{{ trans('utilities::app.gender') }}</span>
        </a>
    </li>

@endsection