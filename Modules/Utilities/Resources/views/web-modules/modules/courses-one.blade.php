<div class="section-content">
    <div class="row">
        <div class="col-md-{{ $data['width'] }}">
            @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang]])
            <div class="owl-carousel-4col" data-dots="true">
                @foreach( \Modules\Admin\Entities\Course::whereIn('id', array_keys($data['courses']))->with(['department'])->get() as $course )
                    @include('utilities::web-modules.modules.sub.course-card-1', compact('course'))
                @endforeach
            </div>
        </div>
    </div>
</div>