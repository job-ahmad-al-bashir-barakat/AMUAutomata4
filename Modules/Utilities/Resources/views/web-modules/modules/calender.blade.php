@php($caldendar = $data['calendar'])
{!! $caldendar->calendar() !!}
<div class="calendar" data-key="{{ $caldendar->getId() }}" data-calendar-option="{{ $caldendar->getOptionsJson() }}"></div>