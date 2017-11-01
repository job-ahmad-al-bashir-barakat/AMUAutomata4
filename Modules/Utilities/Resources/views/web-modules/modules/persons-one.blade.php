<div class="col-md-{{ $data['width'] }}">
    @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '2'])
    <div class="owl-carousel-4col">
        @foreach($data['persons'] as $person)
        @include('utilities::web-modules.modules.sub.person-card-1', ['person' => $person])
        @endforeach
    </div>
</div>