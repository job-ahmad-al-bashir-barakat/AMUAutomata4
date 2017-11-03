@foreach($persons as $person)
    @include('utilities::web-modules.modules.sub.person-card-2', ['person' => $person])
@endforeach