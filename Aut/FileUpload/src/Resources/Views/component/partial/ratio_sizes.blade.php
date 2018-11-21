<div class="ratio-cont">
    <span><b>{{ trans('fileupload::fileupload.allowed_ratio') }}</b></span>
    @foreach($cropRatio as $index => $item)
        <span> [{{ $item['width'] }} × {{ $item['height'] }}] </span>
    @endforeach
</div>