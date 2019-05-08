<div class="gallery-item col-md-6">
    <article class="post clearfix mb-30 bg-lighter">
        <div class="entry-header">
            <div class="post-thumb thumb">
                <img src="{{ asset($news->image_path['sm']) }}" alt="" class="img-responsive img-fullwidth">
            </div>
        </div>
        <div class="entry-content border-1px p-20 pr-10">
            <div class="entry-meta media mt-0 no-bg no-border">
                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                        <li class="font-16 text-white font-weight-600">{{ $news->publish_date->format('d') }}</li>
                        <li class="font-12 text-white">{{ $news->publish_date->format('M') }}</li>
                    </ul>
                </div>
                <div class="media-body pl-15">
                    <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white m-0 mt-5"><a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{ $news->lang_title[$lang]->text }}</a></h4>
                    </div>
                </div>
            </div>
            <p class="mt-10" style="min-height: 60px;">
                {{ $news->lang_description[$lang]->text }}
            </p>
            <a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}" class="btn-read-more"> {{trans('utilities::web-modules.read_more')}}</a>
            <div class="clearfix"></div>
        </div>
    </article>
</div>