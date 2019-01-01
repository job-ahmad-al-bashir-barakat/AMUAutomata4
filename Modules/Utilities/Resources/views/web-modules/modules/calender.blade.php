@php($caldendar = $data['calendar'])

<div class="col-md-{{ $data['width'] ?? '12' }}">
    {!! $caldendar->calendar() !!}
</div>
<div class="calendar" data-key="{{ $caldendar->getId() }}" data-calendar-option="{{ $caldendar->getOptionsJson() }}"></div>