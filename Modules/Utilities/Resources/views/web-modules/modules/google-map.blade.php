<div class="col-md-{{ $data['width'] }}">
    <div
        id="leaflet-map-{{ $data['id'] }}"
        class="leaflet-map"
        data-mapstyle="style1"
        data-height="200"
        data-latlng="{{ $data['geolocation'] }}"
        data-zoom="12"
    ></div>
</div>
