@foreach($modules as $moduleIndex => $moduleItems )

    @foreach($moduleItems as $index => $items)

        @if($items->count())
        <div>
            <label>{{ trans("$moduleIndex::app.$index") }}</label>
        </div>
        @endif

        @if($items->count())
        <div id="nestable" class="dd items">
            <ol class="dd-list">
        @endif
                @foreach($items as $link)
                    <li data-id="1" class="dd-item" data-type="root">
                        <div class="dd-handle">{{ $link->lang_name[App::getLocale()]['text'] or $link->code }}</div>
                    </li>
                @endforeach
        @if($items->count())
            </ol>
        </div>
        @endif
    @endforeach

@endforeach