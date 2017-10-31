<div class="col-md-{{ $data['width'] }}">
    <div class="pr-40">
        @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '2', 'font' => ''])
        <div class="row">
            @foreach($data['text_cards_1'] as $textCard)
            @include('utilities::web-modules.modules.sub.text-card-2', ['textCard' => $textCard, 'width' => (12/$data['show'])])
            @endforeach
        </div>
    </div>
</div>