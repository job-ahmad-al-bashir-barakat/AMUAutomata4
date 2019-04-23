<div class="row">
    <div class="col-md-8 pull-right">
        <img src="{{ asset($partner->large_image_path) }}" alt="">
    </div>
    <div class="col-md-4 pull-left">
        <ul>
            <li>
                <h5>Client:</h5>
                <p>{{ $partner->lang_name[$lang]->text }}</p>
            </li>
            <li>
                <h5>Description:</h5>
                <p>{!! $partner->lang_description[$lang]->text !!}</p>
            </li>
            <li>
                <h5>Website:</h5>
                <p><a href="{{ $partner->contact->url }}">{{ $partner->contact->url }}</a></p>
            </li>
            <li>
                <h5>Social Network:</h5>
                <ul class="styled-icons icon-sm icon-gray icon-circled">
                    @include('utilities::web-modules.modules.sub.social-network', ['socialNetworks' => $partner->contact->socialNetwork])
                </ul>
            </li>
        </ul>
    </div>
</div>

