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
                        <div class='aut-tree' data-group="{{ $i }}" data-max-depth="10" data-clone="true"  data-drop-exists="true" data-reject="true" data-reject-rule-callback="rejectLinks" data-type="{{ $index }}">
                            <div id="nestable-{{$index}}" class="nestable dd">
                                <ol class="dd-list">
                                    @foreach($items as $link)
                                        @php($text = $link->lang_name[App::getLocale()]['text'])
                                        <li data-id="{{ $link->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ \Illuminate\Support\Str::slug($text) }}" data-type="{{ $index }}">
                                            <div class='dd-handle dd3-handle move' @if($dir == 'rtl') style="left: 0; right: inherit;" @endif>{{ $text or $link->code }}</div>
                                            <div class='dd3-content'>
                                               <span class="hand">{{ $text or $link->code }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    @endcomponent

                @endif

            @endforeach

        @endforeach
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12 mt-sm-10 pull-left">
        {!! tree($view ,$group_count ,$group_sourse ,10 ,[
            'data-reject'               => 'true',
            'data-drag-end-callback'    => 'dragSiteMenu' ,
            'data-reject-rule-callback' => 'ruleSiteMenu',
            'data-reject-action-callback' => 'actionSiteMenu'
        ]) !!}
    </div>
</div>
