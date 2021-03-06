<div class="col-md-{{ $data['width'] }}">
    @if($data['title'][$lang])
        @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '3', 'font' => ''])
    @endif
    <div class="owl-carousel-{{ $data['show'] ?? '1' }}col owl-nav-top" data-nav="true">
        @foreach($data['events'] as $event)
            <div class="item">
                <article class="post clearfix bg-lighter">
                    <div class="entry-header">
                        <div class="post-thumb thumb">
                            <img src="{{ asset(getWebpSrc($event->image_path)) }}" alt="" class="img-responsive img-fullwidth">
                        </div>
                    </div>
                    <div class="entry-content p-15 pt-10 pb-10">
                        <p class="mt-5">{!! $event->lang_title[app()->getLocale()]->text !!}
                            @if($event->lang_url[app()->getLocale()])<a class="text-theme-color-2 font-12 ml-5" href="{{ fixLinkUrl($event->lang_url[app()->getLocale()]->text) }}"> @lang('app.read_more')</a>@endif
                        </p>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>