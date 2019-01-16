<div class="col-md-{{ $data['width'] ?? '6' }} wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
     style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
    <h2 class="mt-0 font-weight-600">{{ $data['title'][$lang] }}</h2>
    {!! $data['text_editor'][$lang] !!}
    @isset($data['url'])
        <a href="{{ $data['url'][$lang] }}" class="btn btn-flat btn-theme-colored mt-20 mb-sm-30 border-left-theme-color-2-4px">{{ $data['page']->lang_name[$lang]->text }}</a>
    @endisset
</div>