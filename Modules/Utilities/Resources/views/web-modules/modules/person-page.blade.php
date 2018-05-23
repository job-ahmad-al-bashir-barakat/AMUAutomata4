@php($personSlug = \Route::input('person'))
@php($personId = getIdFromSlug($personSlug))
@php($person = \Modules\Admin\Entities\Person::findOrFail($personId))

<div class="col-md-{{ $data['width'] }}">
    <div class="row">
        <div class="col-md-4">
            <div class="thumb">
                <img src="{{ asset($person->image_path) }}" alt="">
            </div>
        </div>
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
    </div>
</div>
<div class="row mt-30">
    <div class="col-md-4">
        <h4 class="line-bottom">About Me:</h4>
        <div class="volunteer-address">
            <ul>
                @if($person->lang_experience)
                <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                        <div class="media-left">
                            <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">@lang('app.experiences'):</h5>
                            <p>{!! $person->lang_experience[$lang]->text !!}</p>
                        </div>
                    </div>
                </li>
                @endif
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
                            <h5 class="mt-0 mb-0">@lang('app.contact'):</h5>
                            <p>
                                @if($person->contact->phone)<span>@lang('app.phone'):</span> {{ $person->contact->phone }}<br>@endif
                                @if($person->contact->email)<span>@lang('app.email'):</span> {{ $person->contact->email }}<br>@endif
                                @if($person->contact->mobile)<span>@lang('app.mobile'):</span> {{ $person->contact->mobile }}<br>@endif
                            </p>
                        </div>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
    @if($person->contact->gelocation)
    <div class="col-md-4">
        <h4 class="line-bottom">Find Location:</h4>
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
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="js/google-map-init.js"></script>
    </div>
    @endif
    {{--<div class="col-md-4">
        <div class="clearfix">
            <h4 class="line-bottom">Quick Contact:</h4>
        </div>
        <form id="contact-form" class="contact-form-transparent">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored mt-5" type="submit">Send your message</button>
            </div>
        </form>
    </div>--}}
</div>
