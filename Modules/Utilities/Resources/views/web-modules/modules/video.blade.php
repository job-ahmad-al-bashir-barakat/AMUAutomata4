<div class="col-md-{{ $data['width'] }}">
    @if($data['title'][$lang])
        @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '3', 'font' => ''])
    @endif
    <div class="embed-responsive embed-responsive-16by9">
        <video class="embed-responsive-item" controls>
            <source src="{{ str_replace('{folder}', 'videos', $data['videoFile']->file_url) }}" type="{{ $data['videoFile']->mime_type }}">
            Your browser does not support HTML5 video.
        </video>
    </div>
</div>