<div class="col-sm-12 col-md-4">
    <div class="card effect__hover">
        <div class="card__front border-3px bg-lighter" @if($block->image_path['front']) style='background-size: cover;background-image: url("{{ asset($block->image_path['front']) }}")' @endif>
            <div class="card__text">
                <div class="display-table-parent">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="icon-box mb-0">
                                @if($block->icon)
                                <a href="#" class="icon mb-0">
                                    <i class="text-theme-colored {{ $block->icon->code }} font-72"></i>
                                </a>
                                @endif
                                {{--<h3 class="icon-box-title text-theme-colored">{{ $block->lang_title[$lang]->text }}</h3>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card__back" @if($block->image_path['back']) style='background-size: cover;background-image: url("{{ asset($block->image_path['back']) }}")' @else data-bg-color="#202c45" @endif>
            <div class="card__text">
                <div class="display-table-parent p-30">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <h3 class="text-theme-color-2">{{ $block->lang_title[$lang]->text }}</h3>
                            <p class="text-gray-lightgray">{{ $block->lang_text[$lang]->text }}</p>
                            <a href="#" class="btn btn-default mt-10">{{ $block->lang_btn[$lang]->text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>