<footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e" style="background-image: url('images/footer-bg.png';); background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: rgb(37, 39, 46) !important;">
    <div class="container pt-60 pb-30">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                @php($logoPath = $footer->logo_path ?? ($logoPath ?? 'images/logo-wide-'.$lang.'.png'))
                <div class="widget dark"> <img alt="" src="{{ asset($logoPath) }}">
                    @if($footer->lang_text[$lang])<p class="font-12 mt-20 mb-10">{{ $footer->lang_text[$lang]->text }}</p>@endif
                    <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20">
                        @if($footer->contact && $footer->contact->socialNetwork)
                            @include('utilities::web-modules.modules.sub.social-network', ['socialNetworks' => $footer->contact->socialNetwork])
                        @else
                            <li><a target="_blank" href="{{setting('facebook_page')->value}}"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('wiki_page')->value}}"><i class="fa fa-wikipedia-w text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('google_account')->value}}"><i class="fa fa-google-plus text-white"></i></a></li>
                            <li><a target="_blank" href="{{setting('youtube_channel')->value}}"><i class="fa fa-youtube text-white"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            @if($footer->footerLinks && $footer->footerLinks->count())
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">@lang('app.useful_links')</h4>
                    <ul class="list angle-double-right list-border">
                        @foreach($footer->footerLinks as $link)
                            <li><a href="{{ $link->lang_url[$lang]->text }}">{{ $link->lang_text[$lang]->text }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            @php($news = \Modules\Admin\Entities\News::orderBy('publish_date','desc')->take(3)->get())
            @if($news && $news->count())
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom-theme-colored-2">@lang('app.latest_news')</h5>
                    <div class="latest-posts">
                        @foreach($news as $item)
                            <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="{{ RouteUrls::newsPage(getSlug($item->id, $item->lang_title[$lang]->text)) }}">
                                <img style="max-width: 80px;" src="{{ asset($item->image_path['sm']) }}" alt="">
                            </a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="{{ RouteUrls::newsPage(getSlug($item->id, $item->lang_title[$lang]->text)) }}">{{ $item->lang_title[$lang]->text }}</a></h5>
                                <p class="post-date mb-0 font-12">{{ $item->publish_date->format('M d, Y') }}</p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if($footer->contact)
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom-theme-colored-2">@lang('app.quick_contact')</h5>
                    <ul class="list list-border">
                        @if($footer->contact->phone)<li><a href="#" @if($dir == 'rtl') style="direction:ltr;float:right;" @endif>{{ $footer->contact->phone }}</a></li>@endif
                        @if($footer->contact->email)<li><a href="#">{{ $footer->contact->email }}</a></li>@endif
                        @if($footer->contact->lang_address)<li><a href="#" class="lineheight-20">{{ $footer->contact->lang_address[$lang]->text }}</a></li>@endif
                    </ul>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="text-white font-11 m-0">@lang('app.theme_rights_reserved')</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>