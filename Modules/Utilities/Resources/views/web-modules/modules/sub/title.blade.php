{{--<div class="col-md-8">--}}
@php($text = explode(' ', $title, 2))
@php($linedText = $text[0])
@php($restText = $text[1])
<h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">{{ $linedText }} <span class="text-theme-color-2 font-weight-400">{{ $restText }}</span></h2>
{{--</div>--}}
