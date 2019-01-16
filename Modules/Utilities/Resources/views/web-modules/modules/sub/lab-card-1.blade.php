<div class="col-md-3 sm-text-center mb-30 mb-sm-30">
    <div class="team-members maxwidth400">
        <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="{{ asset($lab->main_image_path) }}">
        </div>
        <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
            <h4 class="font-raleway font-weight-600 m-0">
                <a class="text-theme-color-2" href="{{ RouteUrls::singleLab(getSlug($lab->id, $lab->lang_name[$lang]->text)) }}">{{ $lab->lang_name[$lang]->text }}</a>
            </h4>
        </div>
    </div>
</div>