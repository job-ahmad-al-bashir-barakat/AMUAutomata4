@foreach($news as $post)
    @include('utilities::web-modules.modules.sub.news-card-1', ['news' => $post])
@endforeach
