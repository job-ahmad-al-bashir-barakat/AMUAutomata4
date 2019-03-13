<ul>
    @foreach($attributes as $key => $value)
        <li>
            <strong>{!! $key !!}</strong>: {!! $value !!}, {!! $old[$key] !!}
        </li>
    @endforeach
</ul>