<aside class="aside">
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <ul class="nav">
                <li class="has-user-block">
                    <div id="user-block" class="collapse">
                        <div class="item user-block">
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img src="{{ asset(Auth::user()->image_path ?: 'img/user/02.jpg') }}" alt="{{ 'Avatar' }}" width="60" height="60"
                                         class="img-thumbnail img-circle">
                                </div>
                            </div>
                            <div class="user-block-info">
                                <span class="user-block-name">{{ $user->name }}</span>
                                <span class="user-block-role">{{ $user->lang_name[App::getLocale()]['text'] }}</span>
                            </div>
                        </div>
                    </div>
                </li>
                @include('control._aside_menu_general')
                @stack('_aside_menu')
                @include('control._aside_menu_setting')
            </ul>
        </nav>
    </div>
</aside>