@if($url)
    <link href="{{ $url }}" rel="stylesheet">
@endif

@if($family)
    <style>
        html,
        .menuzord,
        .menuzord a,
        body,
        h1, h2, h3, h4, h5, h6,
        a>span,
        .font-raleway
        {
            font-family: {!! $family !!};
        }
    </style>
@endif