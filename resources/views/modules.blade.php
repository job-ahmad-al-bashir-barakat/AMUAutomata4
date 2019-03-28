@php($dir = LaravelLocalization::getCurrentLocaleDirection())
<!DOCTYPE html>
<html dir="{{ $dir }}" lang="{{ app()->getLocale()}}">
<head {{--prefix="{{ getMetaNamespace() }}: {{ localizeURL('') }}"--}}>
    {!! renderSeoTags($seo) !!}
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    {{-- <link href="{{ asset(mix('css/theme-ltr.css')) }}" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    @if($dir == 'rtl')
        <link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
    @endif
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" type="text/css">
    @if($dir == 'rtl')
        <link href="{{ asset('css/css-plugin-collections-rtl.css') }}" rel="stylesheet" type="text/css">
    @endif
    <link href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    @if($dir == 'rtl')
        <link href="{{ asset('css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
    @endif
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset(mix('js/revolution-slider/css/revolution-slider.css')) }}" rel="stylesheet" type="text/css">
    @php($color = $color??'1')
    <link href="{{ asset("css/colors/theme-skin-color-set-{$color}.css") }}" rel="stylesheet" type="text/css">
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.fullscreen.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('theme-custom.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="">
<div id="wrapper" class="clearfix">
    @include('theme.preloader')
    @include('theme.header', ['menu' => $menu])
    <div class="main-content">
        @include('utilities::web-modules.modules.modules')
    </div>
    @include('theme.footer')
    <aside id="sticky-social">
        <ul>
            <li><a target="_blank" class="fa fa-facebook" href="{{setting('facebook_page')->value}}"><span>Facebook</span></a></li>
            <li><a target="_blank" class="fa fa-wikipedia-w" href="{{setting('wiki_page')->value}}"><span>Wiki</span></a></li>
            <li><a target="_blank" class="fa fa-phone" href="{{setting('hot_line')->value}}"><span>{{setting('hot_line')->value}}</span></a></li>
            <li><a target="_blank" class="fa fa-youtube" href="{{setting('youtube_channel')->value}}"><span>Youtube</span></a></li>
            <li><a target="_blank" class="fa fa-linkedin" href="{{setting('linked_in')->value}}"><span>Linkedin</span></a></li>
        </ul>
    </aside>
</div>
<script>
    DIR = '{{ $dir }}';
    isRtl = DIR === 'rtl';
    isLtr = !isRtl;
</script>
<script src="{{ asset(mix('js/main.js')) }}"></script>
<script src="{{ asset(mix('js/leaflet.js')) }}"></script>
<script src="{{ asset(mix('js/leaflet.fullscreen.js')) }}"></script>
<script src="{{ asset(mix('js/revolution-slider/js/revolution-slider.js')) }}"></script>
<script src="{{ asset(mix('js/revolution-slider/js/extensions/revolution-slider-extensions.js')) }}"></script>
<!--[if lt IE 9]>
<script src="{{ asset(mix('js/ie.js')) }}"></script>
<![endif]-->
<script type="text/javascript">
    $(document).ready(function(e) {

        $(document).on('click', '[data-custom-filter]', function () {
            var $this = $(this);
            var filter = $this.data('customFilter');
            $('.filters').addClass('hide');
            $(filter).removeClass('hide');
            $('#title').html($this.find('#title_text').html());
            var checkhide = $this.data('checkEmptyHide') || false;
            var checkhidecont = $this.data('checkEmptyCont') || false;
            if (checkhide) {
                $(checkhide).addClass('hide');
                $conts = $(checkhidecont).find('.filters:not(.hide)');
                if ($conts.length) {
                    $conts.closest(checkhide).removeClass('hide');
                }

            }
        });

        $('[data-custom-filter]:first').click();

        $(document).on('click', 'a.ajax-link-module', function (e) {
            e.preventDefault();
            var $this = $(this);
            var page = $this.data('page');
            var $container = $($this.data('append_to'));
            var url = $this.attr('href');
            var onSuccess = $this.data('onsuccess') || false;
            var appendMethod = $this.data('append_method') || false;
            $this.button('loading');
            $.get(url, {page: page}, function (res){
                if(appendMethod) {
                    window[appendMethod]($container, res);
                } else {
                    $(res).appendTo($container);
                }
                $this.button('reset');
                $this.data('page', page + 1);
                if(onSuccess){
                    window[onSuccess].apply();
                }
            });
        });
        $("[data-trigger-on-load]").trigger('click');

        initLeafletMaps();
        $('.calendar').each(function () {
            let $this = $(this);
            let key = $this.data('key');
            let id = `#calendar-${key}`;
            let options = $this.data('calendarOption');
            $(id).fullCalendar(options);
        });

        $('#mailchimp-subscription-form-footer').ajaxChimp({
            callback: mailChimpCallBack,
            url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
        });

        function mailChimpCallBack(resp) {
            // Hide any previous response text
            var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                $response = '';
            $mailchimpform.children(".alert").remove();
            if (resp.result === 'success') {
                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
            } else if (resp.result === 'error') {
                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
            }
            $mailchimpform.prepend($response);
        }
        var revapi = $(".rev_slider").revolution({
            sliderType:"standard",
            jsFileLocation: "js/revolution-slider/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [620, 768, 960, 720],
            lazyType: "none",
            parallax:"mouse",
            parallaxBgFreeze:"off",
            parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    });
    MAPS = {};
    function initLeafletMaps(){

        $('.leaflet-map').each(function () {
            var $this = $(this);
            var id = $this.attr('id');
            var geolocation = $this.data('latlng').split(',');
            var zoom = $this.data('zoom') || 13;

            if (!MAPS.hasOwnProperty(id)) {
                var map = L.map(id).setView(geolocation, zoom);
                MAPS[id] = map;

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker(geolocation).addTo(map);
                map.addControl(new L.Control.Fullscreen());
                /*.bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                .openPopup()*/;
            }
        });

    }
</script>
</body>
</html>
