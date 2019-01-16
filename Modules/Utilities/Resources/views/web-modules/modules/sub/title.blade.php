@php(list($linedText, $restText) = explode(' ', "{$title} ", 2))
@php($h = $h ?? 2)
@php($font = $font ?? 'font-28')
<h{{ $h }} class="mt-0 {{ $font }} line-bottom line-height-1">@isset($icon)<i class="{{ $icon }} text-gray-darkgray mr-10"></i>@endisset{{ $linedText }} <span class="text-theme-color-2 font-weight-400">{{ trim($restText) }}</span></h{{ $h }}>
