<div class="col-md-{{ $data['width'] }}">
    <div class="row">
        @foreach($data['text_cards_1'] as $textCard)
        @include('utilities::web-modules.modules.sub.text-card-1', ['width' => (12/$data['show'])])
        @endforeach
    </div>
</div>