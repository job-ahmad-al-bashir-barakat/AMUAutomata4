<!-- Section: home-boxes -->
<section class="">
    <div class="container pt-0 pb-0">
        <div class="section-content">
            <div class="row" data-margin-top="-70px">
                @foreach($data['blocks']->blockDetails()->with('icon', 'front_image', 'back_image')->get() as $block)
                @include("utilities::web-modules.modules.sub.block", compact('block'))
                @endforeach
            </div>
        </div>
    </div>
</section>