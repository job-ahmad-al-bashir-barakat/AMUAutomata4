@foreach($courses as $course)
    @include('utilities::web-modules.modules.sub.course-card-1', ['course' => $course])
@endforeach