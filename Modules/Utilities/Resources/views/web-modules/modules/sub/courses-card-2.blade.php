@foreach($courses as $course)
    @include('utilities::web-modules.modules.sub.course-card-2', ['course' => $course])
@endforeach