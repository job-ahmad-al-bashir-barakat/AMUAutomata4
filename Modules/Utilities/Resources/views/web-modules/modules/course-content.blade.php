@if($data['course'])
<div class="col-md-{{ $data['width'] }}">
    <div class="single-service">
        <img src="{{ asset(getWebpSrc($data['course']->image_path['lg'])) }}" alt="">
        <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $data['course']->lang_name[$lang]->text }}</h3>
        {!! $data['course']->lang_content[$lang]->text !!}
    </div>
</div>
@endif