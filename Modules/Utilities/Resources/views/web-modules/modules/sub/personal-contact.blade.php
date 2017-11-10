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
            {{--<li>
                <h5>Location:</h5>
                <p>#405, Lan Streen, Los Vegas, USA</p>
            </li>
            <li>
                <h5>Category:</h5>
                <p>Web design & development, Graphics design</p>
            </li>
            <li>
                <h5>Start Date:</h5>
                <p>January 26, 2016</p>
            </li>--}}
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
{{--
<div class="row mt-60">
    <div class="col-md-6">
        <h4 class="mt-0">Project Description</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
    </div>
    <div class="col-md-6">
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>
</div>--}}
