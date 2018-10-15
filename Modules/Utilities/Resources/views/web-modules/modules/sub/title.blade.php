@php(list($linedText, $restText) = explode(' ', "{$title} ", 2))
@php($h = $h ?? 2)
@php($font = $font ?? 'font-28')
<h{{ $h }} class="mt-0 text-uppercase {{ $font }} line-bottom line-height-1">{{ $linedText }} <span class="text-theme-color-2 font-weight-400">{{ trim($restText) }}</span></h{{ $h }}>
