@if($footer)
    @php($links = $footer->footerLinks->split(2))
@endif
<footer id="footer" class="footer pb-0" {{--data-bg-img="images/footer-bg.png"--}} data-bg-color="#25272e" style="{{--background-image: url(&quot;images/footer-bg.png&quot;);--}} background-position: initial !important; background-size: initial !important; background-repeat: initial !important; background-attachment: initial !important; background-origin: initial !important; background-clip: initial !important; background-color: rgb(37, 39, 46) !important;">
    @if($footer)
        <div class="container pt-70 pb-40">
            <div class="row multi-row-clearfix">

                <div class="col-md-3 text-center">
                    <div class="widget dark">
                        <div class="tags">
                            @foreach($links->get('0', []) as $link)
                                <a href="{{ $link->lang_url[$lang]->text }}">{{ $link->lang_text[$lang]->text }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    @php($logoPath = $footer->logo_path ?? ($logoPath ?? 'images/logo-wide-'.$lang.'.png'))
                    <img alt="" src="{{ asset($logoPath) }}" style="width: 200px;">
                    @if($footer->lang_text[$lang])<p class="font-12 mt-20 mb-10">{{ $footer->lang_text[$lang]->text }}</p>@endif
                </div>
                <div class="col-md-3 text-center">
                    <div class="widget dark">
                        <div class="tags">
                            @foreach($links->get('1', []) as $link)
                                <a href="{{ $link->lang_url[$lang]->text }}">{{ $link->lang_text[$lang]->text }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="styled-icons icon-dark mt-20 icon-circled">
                        <li><a target="_blank" href="{{setting('facebook_page')->value}}" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="{{setting('wiki_page')->value}}"><i class="fa fa-wikipedia-w"></i></a></li>
                        <li><a target="_blank" href="{{setting('google_account')->value}}" data-bg-color="#A11312" style="background: rgb(161, 19, 18) !important;"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="{{setting('youtube_channel')->value}}" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) !important;"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="horizontal-contact-widget mt-30 pt-30 text-center">
                        <div class="col-sm-12 col-sm-4">
                            <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10"></i>
                                <p style="direction: ltr;"><a href="tel:{{ $footer->contact->phone ?? '' }}">{{ $footer->contact->phone ?? '' }}</a></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-4 mt-sm-50">
                            <div class="each-widget"> <i class="pe-7s-map font-36 mb-10"></i>
                                <p>{{ $footer->contact->lang_address[$lang]->text ?? '' }}</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-4 mt-sm-50">
                            <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10"></i>
                                <p><a href="mailto:{{ $footer->contact->email ?? '' }}">{{ $footer->contact->email ?? '' }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="text-white font-11 m-0">@lang('app.theme_rights_reserved')</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>