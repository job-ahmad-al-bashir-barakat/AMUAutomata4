<header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                        <ul class="list-inline pull-right">
                            <li class="mb-0 pb-0">
                                <div class="top-dropdown-outer pt-5 pb-10">
                                    <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i class="fa fa-search font-13"></i> &nbsp;</a>
                                    <ul class="dropdown">
                                        <li>
                                            <div class="search-form-wrapper">
                                                <form method="get" class="mt-10">
                                                    <input type="text" onfocus="if(this.value =='Enter your search') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter your search'; }" value="Enter your search" id="searchinput" name="s" class="">
                                                    <label><input type="submit" name="submit" value=""></label>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget no-border m-0 mr-15 pull-right sm-pull-none sm-text-center">
                        <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                            <li><a target="_blank" href="{{setting('facebook_page')->value}}"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('wiki_page')->value}}"><i class="fa fa-wikipedia-w text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('google_account')->value}}"><i class="fa fa-google-plus text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('youtube_channel')->value}}"><i class="fa fa-youtube text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
        <div class="container pt-0 pb-0">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-5">
                    <div class="widget no-border m-0">
                        <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)">
                            @php($logoPath = $logoPath ?? 'images/logo-wide-'.$lang.'.png')
                            <img style="{{setting('logo_style')->value}}" src="{{ asset($logoPath) }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 pull-{{ $dir == 'rtl' ? 'left' : 'right' }}">
                    <div class="widget no-border m-0">
                        <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)">
                            <img  style="{{setting('moto_style')->value}}" src="{{ asset('images/university-moto-'.$lang.'.png') }}" alt="">
                        </a>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ RouteUrls::translatedCurrentRoute($localeCode) }}">
                                {{ $properties['native'] }}
                            </a>
                            @if(!$loop->last)
                                <span> - </span>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                <div class="container">
                    <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                        <ul class="menuzord-menu">
                            {!! buildHtmlTree($menu) !!}
                        </ul>
                        <ul class="pull-right flip hidden-sm hidden-xs">
                            <li>
                                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" href="{{ setting('learnata')->value }}">{{ setting('learnata')->lang_name[app()->getLocale()]->text }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</header>