<div class="col-md-12">
    <div id="grid" class="gallery-isotope grid-3 clearfix">
        @foreach($data['tenders'] as $tender)
            <div class="gallery-item ">
                <div class="thumb">
                    <img class="img-fullwidth" src="{{ getWebpSrc(asset($tender->thumb_path)) }}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ asset(getWebpSrc($tender->image_path)) }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-description">
                    <span class="category">
                        <span>
                            {!! $tender->lang_text[app()->getLocale()]->text !!}
                        </span>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>
