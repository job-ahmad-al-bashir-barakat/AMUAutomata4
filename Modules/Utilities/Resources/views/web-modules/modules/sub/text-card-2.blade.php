<div class="col-xs-12 col-md-{{ $width }}">
    <div class="icon-box p-0 mb-30">
        <a href="{{ $textCard->url }}" class="icon bg-theme-colored pull-left sm-pull-none flip">
            <i class="{{ $textCard->icon->code }} text-white"></i>
        </a>
        <div class="icon-box-details ml-sm-0">
            <h5 class="icon-box-title mt-15 text-uppercase letter-space-1 font-weight-600 mb-5">{{ $textCard->lang_title[$lang]->text }}</h5>
            <p class="text-gray">{{ $textCard->url }}</p>
        </div>
    </div>
</div>