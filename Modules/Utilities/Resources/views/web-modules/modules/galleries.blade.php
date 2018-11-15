@php($data['galleries']->load('image'))
<div class="col-md-{{ $data['width'] }}">
    <div class="portfolio-filter font-alt align-center">
        <a href="#" class="active" data-filter="*">All</a>
        @foreach($data['galleries'] as $gallery)
            <a href="#gallery_{{ $gallery->id }}" class="" data-filter=".filter_gallery_{{ $gallery->id }}">{{ $gallery->lang_title[$lang]->text }}</a>
        @endforeach
    </div>
    <div id="grid-gallery-isotope" class="gallery-isotope grid-4 gutter clearfix">
        @foreach($data['galleries'] as $gallery)
            @foreach($gallery->image as $image)
                <div class="gallery-item filter_gallery_{{ $gallery->id }}">
                    <div class="thumb">
                        <img class="img-fullwidth" src="{{ str_replace('{folder}', 'galleries/thumps/small', $image->image_url) }}" alt="{{ $gallery->lang_title[$lang]->text }}">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                    <a data-lightbox="image" href="{{ str_replace('{folder}', 'galleries', $image->image_url) }}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        {{--<a class="hover-link" data-lightbox="image" href="{{ str_replace('{folder}', 'galleries', $image->image_url) }}">Full Size</a>--}}
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
    {{--<div id="load-next-posts">
        <a href="portfolio-extra-infinity-scroll-data-2.html" class="btn btn-default btn-lg btn-block">Load more...</a>
    </div>--}}
</div>