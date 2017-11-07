<!-- offsidebar-->
<aside class="offsidebar hide">
    <!-- START Off Sidebar (right)-->
    <nav style="display: initial;">
        <div role="tabpanel">
            <!-- Nav tabs-->
            <ul role="tablist" class="nav nav-tabs nav-justified">
                <li role="presentation" class="active">
                    <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                    </a>
                </li>
                {{--<li role="presentation">
                    <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                    </a>
                </li>--}}
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
                <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                    <h3 class="text-center text-thin">{{ trans('utilities::app.settings') }}</h3>
                    <div class="p">
                        <h4 class="text-muted text-thin">{{ trans('utilities::app.themes') }}</h4>
                        <div class="table-grid mb">
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-a.css') }}">
                                        <input type="radio" name="setting-theme" checked="checked">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-b.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-c.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-d.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="table-grid mb">
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-e.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-f.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-g.css') }}">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                        <span class="color bg-purple-dark"></span>
                                        <span class="color bg-purple"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb">
                                <div class="setting-color">
                                    <label data-load-css="{{ asset('css/theme-h.css') }}">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                            <span class="color bg-danger-dark"></span>
                                            <span class="color bg-danger"></span>
                                        </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p">
                        <h4 class="text-muted text-thin">{{ trans('utilities::app.layout') }}</h4>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.fixed') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.boxed') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        {{--<div class="clearfix">
                            <p class="pull-left">RTL</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-rtl" type="checkbox">
                                    <span></span>
                                </label>
                            </div>
                        </div>--}}
                    </div>
                    <div class="p">
                        <h4 class="text-muted text-thin">{{ trans('utilities::app.aside') }}</h4>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.collapsed') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.collapsed_text') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-collapsed-text" type="checkbox"
                                           data-toggle-state="aside-collapsed-text">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.float') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.hover') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">{{ trans('utilities::app.show_scrollbar') }}</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-hover" type="checkbox" data-toggle-state="show-scrollbar"
                                           data-target=".sidebar">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Off Sidebar (right)-->
</aside>