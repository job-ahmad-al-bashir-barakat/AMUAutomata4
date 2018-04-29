<div class="col-sm-6 col-md-4">
    <div class="service-block bg-white">
        <div class="thumb">
            <img alt="{{ $course->lang_name[$lang]->text }}" src="{{ asset($course->image_path) }}" class="img-fullwidth">
        </div>
        <div class="content text-left flip p-25 pt-0">
            <h4 class="line-bottom mb-10">{{ $course->lang_name[$lang]->text }}</h4>
            <p>{{ $course->lang_description[$lang]->text }}</p>
            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
        </div>
    </div>
</div>