<div class="col-md-{{ $data['width'] }}">
    <div
        id="google-map-{{ $data['id'] }}"
        class="map-canvas autoload-map"
        data-mapstyle="style1"
        data-height="200"
        data-latlng="{{ $data['geolocation'] }}"
        data-zoom="12"
        data-marker="{{ asset('images/map-marker.png') }}">
    </div>
</div>
