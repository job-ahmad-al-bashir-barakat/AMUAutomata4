@foreach($events as $event)
    @include('utilities::web-modules.modules.sub.event-card-1', ['event' => $event])
@endforeach
