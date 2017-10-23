<div class="col-md-{{ $data['width'] or '6' }} wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
     style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
    <h2 class="text-uppercase mt-0 font-weight-600">{{ $data['title'][$lang] }}{{-- Welcome To <span class="text-theme-colored">Studypress</span><br>
        HTML5 Tempalte--}}</h2>

    {!! $data['text_editor'][$lang] !!}
    <a href="#" class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">{{ $data['page']->lang_name[$lang]->text }}</a>
</div>