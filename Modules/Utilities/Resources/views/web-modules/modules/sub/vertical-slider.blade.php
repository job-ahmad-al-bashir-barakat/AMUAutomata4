<div class="border-1px border-{{ $borderDir }}-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
    <div class="testimonial pt-10">
        @isset($imagePath)
        <div class="thumb pull-left mb-0 mr-0 pr-20">
            <img width="75" class="img-circle" alt="" src="{{ getWebpSrc($imagePath) }}">
        </div>
        @endisset
        <div class="@isset($imagePath){{ 'ml-100' }}@endisset">
            <p>{{ $text }}</p>
            <p class="author mt-10">
                @isset($subText)<span class="text-theme-colored">{{ $subText }}</span>@endisset @isset($smallText)<small><em>{{ $smallText }}</em></small>@endisset
            </p>
            @if($url ?? false)
                <br>
                <a href="{{ $url }}" class="btn btn-gray btn-xs ">@lang('app.read_more')</a>
            @endif
        </div>
    </div>
</div>