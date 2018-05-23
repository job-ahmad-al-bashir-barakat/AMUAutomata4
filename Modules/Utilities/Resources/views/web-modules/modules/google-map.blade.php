<div class="col-md-{{ $data['width'] }}">
    <div
        id="google-map-{{ $data['id'] }}"
        {{--data-address="121 King Street, Melbourne Victoria 3000 Australia"--}}
        {{--data-popupstring-id="#popupstring4"--}}
        class="map-canvas autoload-map"
        data-mapstyle="style1"
        data-height="200"
        data-latlng="{{ $data['geolocation'] }}"
        {{--data-title="sample title"--}}
        data-zoom="12"
        data-marker="{{ asset('images/map-marker.png') }}">
    </div>
</div>
