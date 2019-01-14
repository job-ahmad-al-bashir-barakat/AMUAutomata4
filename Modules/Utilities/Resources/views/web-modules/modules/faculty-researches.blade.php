<div class="row">
    @foreach($data['instructors'] as $instructor)
        @if($instructor->researches && $instructor->researches->count())
        <div class="col-md-4">
            <div class="esc-heading heading-line-bottom lr-line left-heading">
                <h4><a href="{{ RouteUrls::universityStaff(getSlug($instructor->id, $instructor->lang_name[$lang]->text)) }}">{{ $instructor->lang_name[$lang]->text }}</a></h4>
            </div>
            <ul class="list">
                @foreach($instructor->researches as $research)
                    <li>{{ $research->lang_name[$lang]->text }}: <a href="{{ $research->url }}" target="_blank">{{ $research->lang_journal[$lang]->text }}</a></li>
                @endforeach
            </ul>
        </div>
        @endif
    @endforeach
</div>