<div class="notify-clone {{ $class }} hide">
    <div class="notify">
        @if(empty($html))
            <span class="{{ $icon or '' }}"></span>
            <span class="text-content">{!! $text or '' !!}</span>
        @else
            {!! $html !!}
        @endif
    </div>
</div>