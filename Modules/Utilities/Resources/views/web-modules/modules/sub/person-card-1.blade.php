<div class="item">
    <div class="team-members maxwidth400">
        <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="{{ asset($person->image_path['sm']) }}">
        </div>
        <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10" style="min-height: 164px;">
            <h4 class="text-uppercase font-raleway font-weight-600 m-0">
                <a class="text-theme-color-2" href="{{ RouteUrls::universityStaff(getSlug($person->id, $person->lang_name[$lang]->text)) }}"> {{ $person->lang_name[$lang]->text }}</a>
            </h4>
            {{--{{dd($person)}}--}}
            {{--@if($person->jobTitle->count())<h5 class="text-theme-color">{{ $person->jobTitle->lang_name[$lang]->text }}</h5>@endif--}}
            <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                @if($person->contact && $person->contact->socialNetwork)
                    @include('utilities::web-modules.modules.sub.social-network', ['socialNetworks' => $person->contact->socialNetwork])
                @else
                    <li style="visibility: hidden"><a href="#" class="fa fa-times"></a></li>
                @endif
            </ul>
        </div>
    </div>
</div>