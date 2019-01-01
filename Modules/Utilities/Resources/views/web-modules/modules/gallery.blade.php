@if($data['images'] && $data['images']->count())
<div class="col-md-{{ $data['width'] ?? '12' }} wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
     style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
    @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '3', 'font' => '', 'icon' => $data['icon']->code ?? ''])
    <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
        @foreach($data['images'] as $image)
            <div class="gallery-item">
                <div class="thumb">
                    <img class="img-fullwidth" src="{{ str_replace('{folder}', 'galleries/thumps/small', $image->image_url) }}" alt="{{ $image->lang_title[$lang]->text ?? '' }}">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                        <div class="icons-holder-inner">
                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                <a data-lightbox="image" href="{{ str_replace('{folder}', 'galleries', $image->image_url) }}"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif