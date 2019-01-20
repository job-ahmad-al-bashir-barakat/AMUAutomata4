<div class="col-md-{{ $data['width'] }} wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
    @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '3', 'font' => '', 'icon' => $data['icon']->code ?? ''])
    <div class="bxslider bx-nav-top" data-count="{{ $data['show'] ?? '2' }}">
        @php($borderDir = 'left')
        @foreach($data['events'] as $slider)
        @include('utilities::web-modules.modules.sub.vertical-slider', [
            'borderDir' => $borderDir,
            'text' => $slider->lang_title[$lang]->text,
            'smallText' => "{$slider->start_date->format('d/m/Y')}" . ($slider->end_date? (" " . trans('app.until') . "{$slider->end_date->format('d/m/Y')}"): '')
        ])
            @if($borderDir == 'left')
                @php($borderDir = 'right')
            @else
                @php($borderDir = 'left')
            @endif
        @endforeach
    </div>
</div>