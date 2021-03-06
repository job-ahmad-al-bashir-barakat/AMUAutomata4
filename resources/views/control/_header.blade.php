<!-- top navbar-->
<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header" style="{{setting('admin_navbar_header_style')->value}}">
            <a href="{{ RouteUrls::admin() }}" class="navbar-brand ajax">
                <div class="brand-logo">
                    <img src="{{ asset('img/logo.png') }}" alt="App Logo" class="img-responsive" style="{{setting('admin_header_image_style')->value}}">
                </div>
                <div class="brand-logo-collapsed">
                    <img src="{{ asset('img/logo-single.png') }}" alt="App Logo" class="img-responsive">
                </div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a href="@void()" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a href="@void()" data-toggle-state="aside-toggled" data-no-persist="true"
                       class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>
                <!-- go home-->
                <li>
                    <a href="{{ url('/') }}" title="{{ trans('app.back_to_home') }}">
                        <em class="icon-home"></em>
                    </a>
                </li>
                <!-- End go home-->
                <!-- START User avatar toggle-->
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a id="user-block-toggle" href="#user-block" data-toggle="collapse" title="{{ trans('utilities::app.user') }}">
                        <em class="icon-user"></em>
                    </a>
                </li>
                <!-- END User avatar toggle-->
                <!-- START logout-->
                <li>
                    <form id="logout-form" action="{{ RouteUrls::logout() }}" method="POST" class="hide">{{ csrf_field() }}</form>
                    <a href="{{ RouteUrls::logout() }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="{{ trans('app.logout') }}">
                        <em class="icon-logout"></em>
                    </a>
                </li>
                <!-- END logout-->
                <!-- START lock screen-->
                <li>
                    <a href="{{ RouteUrls::lockscreen() }}" title="{{ trans('utilities::app.lockscreen') }}">
                        <em class="icon-lock"></em>
                    </a>
                </li>
                <!-- END lock screen-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search icon-->
            {{--<li>
                <a href="@void()" data-search-open="" title="{{ trans('utilities::app.search') }}">
                    <em class="icon-magnifier"></em>
                </a>
            </li>--}}
            <!-- Reload Ajax -->
                <li>
                    <a href="@void()" data-reload="" title="{{ trans('utilities::app.reload_page') }}">
                        <em class="icon-reload"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="visible-lg">
                    <a href="@void()" data-toggle-fullscreen="" title="{{ trans('utilities::app.fullscreen') }}">
                        <em class="fa fa-expand"></em>
                    </a>
                </li>
                <!-- START Offsidebar button-->
                <li>
                    <a href="@void()" data-toggle-state="offsidebar-open" data-no-persist="true" title="{{ trans('utilities::app.theme_setting') }}">
                        <em class="icon-notebook"></em>
                    </a>
                </li>
                <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
        </div>
        <!-- END Nav wrapper-->
        <!-- START Search form-->
    {{--<form role="search" action="search.html" class="navbar-form">
        <div class="form-group has-feedback">
            <input type="text" placeholder="{{ trans('utilities::app.search_for_page') }}" class="form-control">
            <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
        </div>
        <button type="submit" class="hidden btn btn-default">Submit</button>
    </form>--}}
    <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
</header>