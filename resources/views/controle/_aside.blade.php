<aside class="aside">
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <ul class="nav">
                <li class="has-user-block">
                    <div id="user-block" class="collapse">
                        <div class="item user-block">
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img src="{{ asset('img/user/02.jpg') }}" alt="Avatar" width="60" height="60"
                                         class="img-thumbnail img-circle">
                                    <div class="circle circle-success circle-lg"></div>
                                </div>
                            </div>
                            <div class="user-block-info">
                                <span class="user-block-name">Hello, Mike</span>
                                <span class="user-block-role">Designer</span>
                            </div>
                        </div>
                    </div>
                </li>
                @include('controle._aside_menu_general')
                @stack('_aside_menu')
                @include('controle._aside_menu_setting')
            </ul>
        </nav>
    </div>
</aside>