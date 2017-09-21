@foreach($modules as $moduleIndex => $moduleItems )

    @foreach($moduleItems as $index => $items)

        @if($items->count())
        <div>
            <label>{{ trans("$moduleIndex::app.$index") }}</label>
        </div>
        @endif

        @if($items->count())
        <div class="nestable dd" data-group="1" data-max-depth="5">
            <ol class="dd-list">
        @endif
            @foreach($items as $link)
                <li data-id="1" class="dd-item">
                    <div class="dd-handle">{{ $link->lang_name[App::getLocale()]['text'] or $link->code }}</div>
                </li>
            @endforeach
        @if($items->count())
            </ol>
        </div>
        @endif
    @endforeach

@endforeach