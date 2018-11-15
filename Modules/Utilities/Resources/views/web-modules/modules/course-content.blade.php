@php($courseId = array_keys($data['course'][0])[0])
@php($course = \Modules\Admin\Entities\Course::find($courseId))

<div class="col-md-{{ $data['width'] }}">
    <div class="single-service">
        <img src="{{ asset($course->image_path['lg']) }}" alt="">
        <h3 class="text-theme-colored line-bottom text-theme-colored">{{ $course->lang_name[$lang]->text }}</h3>
        {!! $course->lang_content[$lang]->text !!}
    </div>
</div>