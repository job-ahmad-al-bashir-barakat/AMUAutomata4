<div class="rev_slider_wrapper" style="direction: ltr;">
    <div class="rev_slider" data-version="5.0">
        <ul>
            @foreach($data['sliderDetails'] as $sliderDetail)
                @include('utilities::web-modules.modules.sub.slider',
                    [
                        'i' => $loop->iteration,
                        'image' => $sliderDetail['image'],
                        'imageThumb' => $sliderDetail['imageThumb'],
                        'bgposition' => $sliderDetail['bgposition'],
                        'layers' => $sliderDetail['layers'],
                    ]
                )
            @endforeach
        </ul>
    </div>
</div>