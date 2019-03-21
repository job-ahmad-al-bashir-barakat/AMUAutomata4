<div class="row mb-15">
    <div class="col-sm-6 col-md-4">
        <div class="thumb"> <img alt="featured project" src="{{ asset($book->image_path) }}" class="img-fullwidth"></div>
    </div>
    <div class="col-sm-6 col-md-8">
        <h4 class="line-bottom mt-0 mt-sm-20">{{ $book->lang_name[app()->getLocale()]->text }}</h4>
        <ul class="review_text">
            <li><h4 class="mt-0"><span class="text-theme-color-2">@lang('app.author') :</span> {{ $book->author->lang_name[app()->getLocale()]->text }}</h4></li>
            @if($book->isbn)
                <li><h4 class="mt-0"><span class="text-theme-color-2">@lang('app.isbn') :</span> {{ $book->isbn }}</h4></li>
            @endif
        </ul>
        <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
           download="{{ $book->lang_name[app()->getLocale()]->text }}"
           href="{{ asset($book->file_path) }}"
        >@lang('app.download')</a>
    </div>
</div>

<hr>