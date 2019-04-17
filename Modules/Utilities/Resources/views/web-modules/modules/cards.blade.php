@foreach($data['cards'] as $chunks)
    <section>
        <div class="container @if(!$loop->first){{ 'pt-0' }}@endif @if(!$loop->last){{ 'pb-0' }}@endif">
            <div class="section-content">
                <div class="row equal-height-inner mt-sm-0">
                    @foreach($chunks as $card)
                        <div class="col-sm-12 col-md-6 pr-sm-15 @if($loop->last){{ 'pl-0 pl-sm-15 ' }}@else{{ 'pr-0 ' }}@endif sm-height-auto mt-sm-0 wow fadeInLeft animation-delay{{ $loop->index + 1 }}">
                            <div class="sm-height-auto" data-bg-img="{{ asset($card->image_path) }}">
                                <div class="p-20">
                                    <h3 class="text-white ">{{ $card->lang_title[app()->getLocale()]->text }}</h3>
                                    <div class="clearfix"></div>
                                    <p style="min-height:  4.9em;" class="text-white-f1 mt-10">{!! $card->lang_text[app()->getLocale()]->text !!}</p>
                                    <a href="{{ $card->lang_url[app()->getLocale()]->text }}" class="btn btn-default font-14 btn-theme-colored mt-10 hvr-bounce-to-left no-border">{{ $card->lang_link[app()->getLocale()]->text }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endforeach
