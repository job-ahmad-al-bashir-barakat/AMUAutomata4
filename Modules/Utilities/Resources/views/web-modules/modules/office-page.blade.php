@php($office = $data->get('office'))
@php($left = $dir === 'ltr' ? 'left' : 'right')
@php($right = $dir === 'rtl' ? 'left' : 'right')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('utilities::web-modules.modules.sub.title', ['title' => $office->lang_name[$lang]->text, 'h' => '2'])
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <ul>
                    <li>
                        <h5>@lang('app.person'):</h5>
                        <a href="{{ RouteUrls::universityStaff(getSlug($office->person->id, $office->person->lang_name[$lang]->text)) }}">{{ $office->person->lang_name[app()->getLocale()]->text }}</a>
                    </li>
                    @if($office->contact->lang_address[app()->getLocale()]->text)
                    <li>
                        <h5>@lang('app.address'):</h5>
                        <p>{{ $office->contact->lang_address[app()->getLocale()]->text }}</p>
                    </li>
                    @endif
                    @if($office->contact->email)
                    <li>
                        <h5>@lang('app.email'):</h5>
                        <a href="mailto:{{ $office->contact->email }}">{{ $office->contact->email }}</a>
                    </li>
                    @endif
                    @if($office->contact->phoneNumbers->count())
                    <li>
                        <h5>@lang('app.contact'):</h5>
                        <ul style="direction: ltr">
                        @foreach($office->contact->phoneNumbers as $number)
                            @if($number->type == 'P')
                                <li><i style="float: {{ $left }};margin-{{ $right }}: 6px;" class="fa fa-phone"></i> <span>{{ $number->number }}</span></li>
                            @elseif($number->type == 'M')
                                <li><i style="float: {{ $left }};margin-{{ $right }}: 6px;" class="fa fa-mobile"></i> <span>{{ $number->number }}</span></li>
                            @elseif($number->type == 'F')
                                <li><i style="float: {{ $left }};margin-{{ $right }}: 6px;" class="fa fa-fax"></i> <span>{{ $number->number }}</span></li>
                            @endif
                        @endforeach
                        </ul>
                    </li>
                    @endif
                    <li>
                        <h5>@lang('app.share'):</h5>
                        <div class="styled-icons icon-sm icon-gray icon-circled">
                            <a href="{{ facebookShare() }}" target="_blank" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a>
                            <a href="{{ twitterShare() }}" target="_blank" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a>
                            <a href="{{ googleShare() }}" target="_blank" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="{{ getWebpSrc(asset($office->image_path)) }}" alt="">
            </div>
        </div>
        @if($office->contact->geolocation)
        <div class="row mt-60">
            <div class="col-md-6">
                <h4 class="mt-0">@lang('admin::app.gelocation'): </h4>
                <div
                        id="leaflet-office-map-{{ $data['id'] }}"
                        class="leaflet-map"
                        data-mapstyle="style1"
                        data-height="{{ 400 }}"
                        data-latlng="{{ $office->contact->geolocation ?? setting('UGL')->value }}"
                        data-zoom="12"
                ></div>
            </div>
        </div>
        @endif
    </div>
</section>