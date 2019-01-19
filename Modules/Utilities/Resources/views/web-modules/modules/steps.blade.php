<div class="col-md-{{ $data['width'] }}">
    @include('utilities::web-modules.modules.sub.title', ['title' => $data['title'][$lang], 'h' => '3', 'font' => ''])
    @if($data['text_editor'][$lang])<p class="mb-10">{!! $data['text_editor'][$lang] !!}</p>@endif
    <div id="accordion1" class="panel-group accordion">
        @php($firstStep = $data['steps']->pull(0))
        @if($firstStep)
            <div class="panel">
                <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion_{{ $firstStep->id }}" aria-expanded="true"> <span class="open-sub"></span> {{ $firstStep->lang_title[$lang]->text }}</a> </div>
                <div id="accordion_{{ $firstStep->id }}" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                        {!! $firstStep->lang_text[$lang]->text !!}
                        @if($firstStep->lang_url[$lang]->text ?? false)
                        <br>
                        <a href="{{ $firstStep->lang_url[$lang]->text }}" class="btn btn-gray btn-xs ">@lang('app.read_more')</a>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        @foreach($data['steps'] as $step)
            <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion_{{ $step->id }}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> {{ $step->lang_title[$lang]->text }}</a> </div>
                <div id="accordion_{{ $step->id }}" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                    <div class="panel-content">
                        {!! $step->lang_text[$lang]->text !!}
                        @if($step->lang_url[$lang]->text ?? false)
                            <br>
                            <a href="{{ $step->lang_url[$lang]->text }}" class="btn btn-gray btn-xs ">@lang('app.read_more')</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
