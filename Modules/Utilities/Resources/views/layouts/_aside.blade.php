
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
            <li class="">
                <a href="{{ RouteUrls::langs() }}" class="ajax" title="{{ trans('utilities::app.langs') }}">
                    <span>{{ trans('utilities::app.langs') }}</span>
                </a>
            </li>
            <li class="">
                <a href="{{ RouteUrls::users() }}" class="ajax" title="{{ trans('utilities::app.users') }}">
                    <span>{{ trans('utilities::app.users') }}</span>
                </a>
            </li>
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
            <li class="">
                <a href="{{ RouteUrls::customModules() }}" class="ajax" title="{{ trans('utilities::app.custom_modules') }}">
                    <span>{{ trans('utilities::app.custom_modules') }}</span>
                </a>
            </li>
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
                <a href="{{ localizeURL('utilities/general/menu') }}" class="ajax" title="{{ trans('utilities::app.general') }}">
                    <span>{{ trans('utilities::app.general') }}</span>
                </a>
            </li>

            <li class="">
                <a href="{{ localizeURL('utilities/control/menu') }}" class="ajax" title="{{ trans('utilities::app.control') }}">
                    <span>{{ trans('utilities::app.control') }}</span>
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
            <li class="sidebar-subnav-header">{{ trans('utilities::builder') }}</li>

            <li class="">
                <a href="{{ RouteUrls::builderPages() }}" class="ajax" title="{{ trans('utilities::app.pages') }}">
                    <span>{{ trans('utilities::app.pages') }}</span>
                </a>
            </li>
        </ul>
    </li>
@endsection

@section('_aside_setting_utilities')

    <li class="">
        <a href="{{ localizeURL('utilities/general-setting') }}" class="ajax" title="{{ trans('utilities::app.general_setting') }}">
            <span>{{ trans('utilities::app.general_setting') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/social-network') }}" class="ajax" title="{{ trans('utilities::app.social_network') }}">
            <span>{{ trans('utilities::app.social_network') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/gender') }}" class="ajax" title="{{ trans('utilities::app.gender') }}">
            <span>{{ trans('utilities::app.gender') }}</span>
        </a>
    </li>

    <li class="">
        <a href="{{ localizeURL('utilities/position') }}" class="ajax" title="{{ trans('utilities::app.position') }}">
            <span>{{ trans('utilities::app.position') }}</span>
        </a>
    </li>
    <li class="">
        <a href="{{ localizeURL('utilities/job-title') }}" class="ajax" title="{{  trans('utilities::app.job_title') }}">
            <span>{{  trans('utilities::app.job_title') }}</span>
        </a>
    </li>
@endsection