<li class="">
    <a href="#setting" title="Setting" data-toggle="collapse" class="collapsed" aria-expanded="false">
        <em class="icon-settings"></em>
        <span>{{ trans('app.setting') }}</span>
    </a>

    <ul id="setting" class="nav sidebar-subnav collapse" aria-expanded="false" style="height: 0;">
        <li class="sidebar-subnav-header">{{ trans('app.setting') }}</li>

        @stack('_aside_setting')

    </ul>
</li>