@php($lab = $data['lab'])
<div class="col-md-{{ $data['width'] }}">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-pin text-theme-colored"></i></a>
                        <div class="media-body">
                            <strong>@lang('app.labs.description')</strong>
                            <p class="pt-5">{!! $lab->lang_description[$lang]->text ?? '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{ getWebpSrc(asset($lab->main_image_path)) }}" alt="">
        </div>
    </div>
    <div class="row mt-30">
        <div class="col-md-12">
            <h4 class="mb-20">@lang('app.labs.photo')</h4>
            <div class="owl-carousel-6col">
                @foreach($lab->images_path as $imagePath)
                <div class="item"><img src="{{ getWebpSrc(asset($imagePath)) }}" alt=""></div>
                @endforeach
            </div>
        </div>
    </div>
</div>