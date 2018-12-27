@php($personSlug = \Route::input('person'))
@php($personId = getIdFromSlug($personSlug))
@php($person = \Modules\Admin\Entities\Person::findOrFail($personId))

<div class="col-md-{{ $data['width'] }}">
    <div class="row">
        <div class="col-md-8">
            <h4 class="name font-24 mt-0 mb-0">{{ $person->lang_name[$lang]->text }}</h4>
            <h5 class="mt-5 text-theme-color-2">{{ $person->position->lang_name[$lang]->text }}</h5>
            {!! $person->lang_summary[$lang]->text !!}
            <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
                @if($person->contact && $person->contact->socialNetwork)
                    @include('utilities::web-modules.modules.sub.social-network', ['socialNetworks' => $person->contact->socialNetwork])
                @else
                    <li style="visibility: hidden"><a href="#" class="fa fa-times"></a></li>
                @endif
            </ul>
        </div>
        <div class="col-md-4">
            <div class="thumb">
                <img src="{{ asset($person->image_path['lg']) }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="row mt-30">
    @if($person->lang_experience)
        <div class="col-md-4">
            <h4 class="line-bottom">@lang('app.experience'):</h4>
            <div class="volunteer-address">
                <ul>
                    <li>
                        <div class="bg-light media border-bottom p-15 mb-20">
                            <div class="media-left">
                                <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                            </div>
                            <div class="media-body">
                                <p>{!! $person->lang_experience[$lang]->text !!}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    @if($person->researches->count())
        <div class="col-md-4">
            <h4 class="line-bottom">@lang('app.researches'):</h4>
            <div class="volunteer-address">
                <ul>

                    <li>
                        <div class="bg-light media border-bottom p-15 mb-20">
                            <div class="media-body">
                                @foreach($person->researches as $research)
                                <p>{!! $research->lang_name[$lang]->text !!} <a href="{{ $research->url }}" target="_blank">{{ $research->lang_journal[$lang]->text }}</a></p>
                                @endforeach
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    @endif
    <div class="col-md-4 pull-{{ $dir === 'rtl'? 'left' : 'right' }}">
        <h4 class="line-bottom">@lang('admin::app.contact'):</h4>
        <div class="volunteer-address">
            <ul>
                @if($person->contact->lang_address->count())
                    <li>
                        <div class="bg-light media border-bottom p-15 mb-20">
                            <div class="media-left">
                                <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-0">@lang('app.address'):</h5>
                                <p>{{ $person->contact->lang_address[$lang]->text }}</p>
                            </div>
                        </div>
                    </li>
                @endif
                @if($person->contact->phone || $person->contact->email || $person->contact->mobile)
                    <li>
                        <div class="bg-light media border-bottom p-15">
                            <div class="media-left">
                                <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                            </div>
                            <div class="media-body">
                                <p>
                                    @if($person->contact->phone)<span class="pull-{{ $dir === 'rtl'?'right':'left' }}">@lang('admin::app.phone'): </span><span class="pull-{{ $dir === 'rtl'?'right':'left' }}" style="direction:ltr;">{{ $person->contact->phone }}</span><br>@endif
                                    @if($person->contact->email)<span>@lang('admin::app.email'):</span> {{ $person->contact->email }}<br>@endif
                                    @if($person->contact->mobile)<span class="pull-{{ $dir === 'rtl'?'right':'left' }}">@lang('admin::app.mobile'): </span> <span class="pull-{{ $dir === 'rtl'?'right':'left' }}" style="direction:ltr;">{{ $person->contact->mobile }}</span><br>@endif
                                </p>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    @if($person->contact->gelocation)
        <div class="clearfix"></div>
        <div class="col-md-4">
            <h4 class="line-bottom">@lang('app.find_location'):</h4>
            <div
                    data-address="121 King Street, Melbourne Victoria 3000 Australia"
                    data-popupstring-id="#popupstring1"
                    class="map-canvas autoload-map"
                    data-mapstyle="style1"
                    data-height="335"
                    data-latlng="{{ $person->contact->gelocation }}"
                    data-title=""
                    data-zoom="14"
                    data-marker="images/map-marker.png">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                    <h3>CharityFund Office</h3>
                    <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
            </div>
        </div>
    @endif
</div>
