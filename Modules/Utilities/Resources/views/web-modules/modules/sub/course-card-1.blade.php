<div class="col-md-12">
    <div class="service-block bg-white">
        <div class="thumb">
            <img alt="{{ $course->lang_name[$lang]->text }}" src="{{ getWebpSrc(asset($course->image_path['sm'])) }}" class="img-fullwidth">
        </div>
        <div class="content text-left flip p-25 pt-0">
            <h4 class="line-bottom mb-10">{{ $course->lang_name[$lang]->text }}</h4>
            <p>{{ $course->lang_description[$lang]->text }}</p>
            <a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="{{ RouteUrls::singleCourse(getSlug($course->id, $course->lang_name[$lang]->text)) }}">view details</a>
        </div>
    </div>
</div>