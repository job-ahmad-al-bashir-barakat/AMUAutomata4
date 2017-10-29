<div class="border-1px border-{{ $borderDir }}-theme-color-2-6px media sm-maxwidth400 p-15 mt-0 mb-15">
    <div class="testimonial pt-10">
        <div class="thumb pull-left mb-0 mr-0 pr-20">
            <img width="75" class="img-circle" alt="" src="{{ asset($slider->image_path) }}">
        </div>
        <div class="ml-100 ">
            <p>{{ $slider->lang_text[$lang]->text }}</p>
            <p class="author mt-10"><span class="text-theme-colored">{{ $slider->lang_sub_text[$lang]->text }}</span> <small><em>{{ $slider->lang_small_text[$lang]->text }}</em></small></p>
        </div>
    </div>
</div>