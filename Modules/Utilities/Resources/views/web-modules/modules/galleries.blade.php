@if($data['galleries'])
<div class="col-md-{{ $data['width'] }}">
    <div class="portfolio-filter font-alt align-center">
        @php($z = 1)
        @for($i = 0; $i < $data['total']->lastPage(); $i++)
            <a href="#gallery_page_{{ $i + 1 }}" class="@if($i == 0){{ 'active' }}@endif" data-filter=".filter_gallery_page_{{ $i + 1 }}">{{ $i + 1 }}</a>
        @endfor
        {{-- this for make gallery depends on groups
        <br>
        <a href="#" class="active" data-filter="*">{{trans('app.all')}}</a>
        @foreach($data['galleries'] as $gallery)
            <a href="#gallery_{{ $gallery->id }}" class="" data-filter=".filter_gallery_{{ $gallery->id }}">{{ $gallery->lang_title[$lang]->text }}</a>
        @endforeach
        --}}
    </div>
    <div id="grid-gallery-isotope" class="gallery-isotope grid-6 gutter clearfix">
        @php($i = 1)
        @php($z = 1)
        @foreach($data['galleries'] as $gallery)
            @foreach($gallery->image as $image)
                <div class="gallery-item filter_gallery_{{ $gallery->id }} filter_gallery_page_{{ $z }}">
                    <div class="thumb">
                        <img class="img-fullwidth" src="{{ str_replace('{folder}', 'galleries/thumps/small', getWebpSrc($image->image_url)) }}" alt="{{ $gallery->lang_title[$lang]->text }}">
                        <div class="overlay-shade"></div>
                        <div class="icons-holder">
                            <div class="icons-holder-inner">
                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                    <a data-lightbox="image" href="{{ str_replace('{folder}', 'galleries', getWebpSrc($image->image_url)) }}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($i % $data['total']->perPage() == 0)
                    @php($z++)
                @endif
                @php($i++)
            @endforeach
        @endforeach
    </div>
</div>
@endif