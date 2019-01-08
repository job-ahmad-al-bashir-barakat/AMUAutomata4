<section id="blog">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">{{trans('utilities::web-modules.latest')}} <span class="text-theme-color-2 font-weight-400">{{trans('utilities::web-modules.news')}}</span></h2>
                    <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                        @foreach($data['news'] as $post)
                            @include('utilities::web-modules.modules.sub.latest-news-card', ['news' => $post])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>