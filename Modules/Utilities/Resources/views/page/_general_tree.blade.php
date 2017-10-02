@php
    $group_count = $group['count'] + 1;
    $group_sourse = implode(',', array_except($group ,['count']));
@endphp

<div class="row">

    @php($i = 0)
    <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
        @foreach($modules as $moduleIndex => $moduleItems )

            @foreach($moduleItems as $index => $items)

                @if($items->count())

                    @php(++$i)
                    @component('controle.component.panel' ,[
                        'id'        => "menu-$index",
                        'title'     => trans("$moduleIndex::app.$index"),
                        'panelType' => 'primary',
                        'active'    => false,
                        'panelAttr' => "data-save-state=false style=margin-bottom:2px;",
                    ])

                        <div id="nestable-{{$index}}" class="nestable dd" data-group="{{ $i }}" data-max-depth="10" data-clone="true" data-reject="true" data-drop-exists="true" data-reject-callback="rejectLinks" data-type="{{ $index }}">
                            <ol class="dd-list">
                                @foreach($items as $link)
                                    @php($text = $link->lang_name[App::getLocale()]['text'])
                                    <li data-id="{{ $link->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ \Illuminate\Support\Str::slug($text) }}" data-type="{{ $index }}">
                                        <div class='dd-handle dd3-handle move'>{{ $text or $link->code }}</div>
                                        <div class='dd3-content'>
                                           <span class="hand">{{ $text or $link->code }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>

                    @endcomponent

                @endif

            @endforeach

        @endforeach
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12 mt-sm-10 pull-left">
        {!! tree($view ,$group_count ,$group_sourse ,10 ,'data-reject="true" data-reject-callback="rejectMainTree"') !!}
    </div>
</div>

{{--
    <div id="nestable-menu" class="nestable dd order" data-drop="true" data-empty-text="{{ trans('utilities::app.drag_item_here') }}">

    </div>
--}}
