<div class="col-md-{{ $data['width'] }}">
    @if($data['title'] && $data['title'][$lang])
        @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '2'])
    @endif
    <div id="person_tow" class="row mtli-row-clearfix form-group">
        @foreach($data['persons'] as $person)
            @include('utilities::web-modules.modules.sub.person-card-2', ['person' => $person])
        @endforeach
    </div>
</div>