@foreach($socialNetworks as $socialNetwork)
    <li><a href="{{ $socialNetwork->pivot->url or '#' }}"><i class="fa fa-{{ $socialNetwork->code }}"></i></a></li>
@endforeach
