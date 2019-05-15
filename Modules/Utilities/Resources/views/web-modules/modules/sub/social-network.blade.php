@foreach($socialNetworks as $socialNetwork)
    @if($socialNetwork->pivot->url != '' and $socialNetwork->pivot->url != '#')
        <li><a href="{{ $socialNetwork->pivot->url ?? '#' }}"><i class="fa fa-{{ $socialNetwork->code }}"></i></a></li>
    @endif
@endforeach