<div class="item">
    <div class="team-members maxwidth400">
        <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="{{ asset($person->image_path) }}">
        </div>
        <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
            <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="page-teachers-details.html"> {{ $person->lang_name[$lang]->text }}</a></h4>
            <h5 class="text-theme-color">{{ $person->jobTitle->lang_name[$lang]->text }}</h5>
            <ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                @if($person->contact && $person->contact->socialNetwork)
                @foreach($person->contact->socialNetwork as $socialNetwork)
                    <li><a href="{{ $socialNetwork->pivot->url or '#' }}"><i class="fa fa-{{ $socialNetwork->code }}"></i></a></li>
                @endforeach
                {{--
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                --}}
                @else
                    <li style="visibility: hidden"><a href="#" class="fa fa-times"></a></li>
                @endif
            </ul>
        </div>
    </div>
</div>