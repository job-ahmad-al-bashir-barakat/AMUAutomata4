{{--<div class="section-title mb-10">
    <div class="row">
        @include('utilities::web-modules.modules.sub.title', ['width' => $data['width'], 'title' => $data['title'][$lang]])
    </div>
</div>--}}
<div class="section-content">
    <div class="row">
        <div class="col-md-{{ $data['width'] }}">
            @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang]])
            <div class="owl-carousel-4col" data-dots="true">
                @foreach( \Modules\Admin\Entities\Course::whereIn('id', array_keys($data['courses']))->with(['department'])->get() as $course )
                    @include('utilities::web-modules.modules.sub.course-card-1', compact('course'))
                @endforeach
                {{--
                <div class="item">
                    <div class="service-block mb-md-30 bg-white">
                        <div class="thumb"> <img alt="featured project" src="http://placehold.it/265x195" class="img-responsive img-fullwidth">
                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                        </div>
                        <div class="content text-left flip p-25 pt-0">
                            <h4 class="line-bottom mb-10">Computer Technologies</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-block mb-md-30 bg-white">
                        <div class="thumb"> <img alt="featured project" src="http://placehold.it/265x195" class="img-responsive img-fullwidth">
                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                        </div>
                        <div class="content text-left flip p-25 pt-0">
                            <h4 class="line-bottom mb-10">Development Studies</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-block mb-md-30 bg-white">
                        <div class="thumb"> <img alt="featured project" src="http://placehold.it/265x195" class="img-responsive img-fullwidth">
                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                        </div>
                        <div class="content text-left flip p-25 pt-0">
                            <h4 class="line-bottom mb-10">Electrical & Electronic</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="service-block mb-md-30 bg-white">
                        <div class="thumb"> <img alt="featured project" src="http://placehold.it/265x195" class="img-responsive img-fullwidth">
                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                        </div>
                        <div class="content text-left flip p-25 pt-0">
                            <h4 class="line-bottom mb-10">Chemical Engineering</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                        </div>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</div>