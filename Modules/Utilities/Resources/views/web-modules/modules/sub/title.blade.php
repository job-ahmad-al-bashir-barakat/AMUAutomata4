{{--<div class="col-md-8">--}}
@php($text = explode(' ', $title, 2))
@php($linedText = $text[0])
@php($restText = $text[1])
@if(!isset($h))
    @php($h = 2)
@endif
@if(!isset($font))
    @php($font = 'font-28')
@endif
<h{{ $h }} class="mt-0 text-uppercase {{ $font }} line-bottom line-height-1">{{ $linedText }} <span class="text-theme-color-2 font-weight-400">{{ $restText }}</span></h{{ $h }}>
{{--</div>--}}
