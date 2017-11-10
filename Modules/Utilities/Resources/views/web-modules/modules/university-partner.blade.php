{{--{{ dd(\Modules\Admin\Entities\Partner::with(['contact', 'image', 'image_small', 'image_large'])->get()->toArray()) }}--}}
@php($partners = \Modules\Admin\Entities\Partner::with(['contact', 'image', 'image_small', 'image_large'])->get())
<section>
    <div class="container pb-0">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel-5col" data-nav="true" data-loop="false" data-autoplay="false">
                    @foreach($partners as $partner)
                    <div class="item">
                        <div class="overlay-zoom">
                            <div class="overlay-zoom-item">
                                <img src="{{ asset($partner->small_image_path) }}" alt="">
                                <a href="#owl_1" >
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h1><b>{{ $partner->lang_name[$lang]->text }}</b></h1>
                                            {{--<p></p>--}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home" class="divider">
    <div class="fullwidth-carousel" data-autoplay="false" data-nav="false">
        @foreach($partners as $partner)
        <div data-hash="owl_1" class="item">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container pt-100 pb-150">
                        @include('utilities::web-modules.modules.sub.personal-contact', ['partner' => $partner])
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>