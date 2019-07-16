<div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
    <div class="team-members maxwidth400">
        <div class="team-thumb">
            <img src="{{ asset(getWebpSrc($office->image_path)) }}" alt="">
            {{--<div
                    style="min-height: 250px;"
                    id="leaflet-map-office-{{ $office->id }}"
                    class="leaflet-map"
                    data-mapstyle="style1"
                    data-height="200"
                    data-latlng="{{ $office->contact->gelocation }}"
                    data-zoom="12"
            ></div>--}}
        </div>
        <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10" style="min-height: 165px;">
            <h4 class=" font-raleway font-weight-600 m-0">
                <a class="text-theme-color-2" href="{{ RouteUrls::officePage(getSlug($office->id, $office->lang_name[$lang]->text)) }}">{{ $office->lang_name[$lang]->text }}</a>
            </h4>
            @if($office->contact->phone)
                <h5 class="text-theme-color" style="direction: ltr"><a href="tel:{{ $office->contact->phone }}"><i class="fa fa-phone"></i> {{ $office->contact->phone }}</a></h5>
            @endif
            @if($office->contact->mobile)
                <h5 class="text-theme-color" style="direction: ltr"><a href="tel:{{ $office->contact->mobile }}"><i class="fa fa-mobile"></i> {{ $office->contact->mobile }}</a></h5>
            @endif
        </div>
    </div>
</div>