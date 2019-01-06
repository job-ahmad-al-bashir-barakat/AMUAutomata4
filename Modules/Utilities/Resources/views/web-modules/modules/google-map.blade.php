<div class="col-md-{{ $data['width'] }}">
    <div
        id="leaflet-map-{{ $data['id'] }}"
        class="leaflet-map"
        data-mapstyle="style1"
        data-height="200"
        data-latlng="{{ $data['geolocation'] }}"
        data-zoom="12"
        {{--data-marker="{{ asset('images/map-marker.png') }}"--}}
    ></div>
</div>
