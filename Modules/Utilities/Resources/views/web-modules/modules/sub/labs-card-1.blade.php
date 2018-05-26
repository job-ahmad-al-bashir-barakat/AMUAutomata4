@foreach($labs as $lab)
    @include('utilities::web-modules.modules.sub.lab-card-1', ['lab' => $lab])
@endforeach