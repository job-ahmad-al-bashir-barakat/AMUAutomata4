<div class="notify-clone {{ $class }} hide">
    <div class="notify">
        @if(empty($html))
            <span class="{{ $icon ?? '' }} pull-left"></span>
            <span class="text-content">{!! $text ?? '' !!}</span>
        @else
            {!! $html !!}
        @endif
    </div>
</div>