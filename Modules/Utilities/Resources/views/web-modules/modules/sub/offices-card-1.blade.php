@foreach($offices as $office)
    @include('utilities::web-modules.modules.sub.office-card-1', ['office' => $office])
@endforeach