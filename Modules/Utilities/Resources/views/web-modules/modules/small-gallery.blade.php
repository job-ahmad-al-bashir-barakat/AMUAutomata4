@php($images = \Modules\Utilities\Entities\Image::whereIn('id', $data['images'])->get())
@if($images->count())
<div class="col-md-{{ $data['width'] }} wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="row mb-10">
        <div class="col-md-12 pr-5 pr-sm-15 mb-sm-10">
            <img class="img-fullwidth" src="{{ asset("storage/upload/image/small_galleries/{$images->pull(0)->hash_name}") }}" alt="">
        </div>
    </div>
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-6 pr-5 pr-sm-15 mb-sm-10">
            <img class="img-fullwidth" src="{{ asset("storage/upload/image/small_galleries/{$image->hash_name}") }}" alt="">
        </div>
        @endforeach
    </div>
</div>
@endif