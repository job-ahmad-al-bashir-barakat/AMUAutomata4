<div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
    <div class="team-members maxwidth400">
        <div class="team-thumb">
            <div
                id="google-map1"
                data-address="121 King Street, Melbourne Victoria 3000 Australia"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style1"
                data-height="200"
                data-latlng="{{ $office->contact->gelocation }}"
                data-title="sample title"
                data-zoom="12"
                data-marker="{{ asset('images/map-marker.png') }}">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                    <h3>Medinova Office</h3>
                    <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
            </div>
        </div>
        <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
            <h4 class="text-uppercase font-raleway font-weight-600 m-0">
                <a class="text-theme-color-2" href="{{ RouteUrls::officePage(getSlug($office->id, $office->lang_name[$lang]->text)) }}">{{ $office->lang_name[$lang]->text }}</a>
            </h4>
            @if($office->contact->phone)
                <h5 class="text-theme-color"><a href="tel:{{ $office->contact->phone }}"><i class="fa fa-phone"></i> {{ $office->contact->phone }}</a></h5>
            @endif
            @if($office->contact->mobile)
                <h5 class="text-theme-color"><a href="tel:{{ $office->contact->mobile }}"><i class="fa fa-mobile"></i> {{ $office->contact->mobile }}</a></h5>
            @endif
        </div>
    </div>
</div>