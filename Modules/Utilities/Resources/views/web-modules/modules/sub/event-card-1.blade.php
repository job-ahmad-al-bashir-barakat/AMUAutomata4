<div class="gallery-item ">
    <div class="thumb">
        <img class="img-fullwidth" src="{{ asset($event->image_path) }}" alt="project">
    </div>
    <div class="portfolio-description">
        <span class="category">
            <span>
                {!! $event->lang_title[app()->getLocale()]->text !!}
            </span>
        </span>
    </div>
</div>