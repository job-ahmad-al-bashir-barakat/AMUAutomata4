@php
    $i = 0;
@endphp

<div class="link_items">
    <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
        @foreach($menuItems as $menuItemsIndex => $menuItemsCollection )

            @php($title = ($tableItemsDynamic[$menuItemsIndex])->first()->lang_name[App::getLocale()]['text'])
            @component('control.component.panel' ,[
                'id'        => "menu-$menuItemsIndex",
                'title'     => $title,
                'panelType' => 'primary',
                'active'    => ++$i == 1,
                'panelAttr' => "data-save-state=false style=margin-bottom:2px;",
            ])
                <div class='aut-tree' data-group="{{ $i }}" data-max-depth="10" data-clone="true"  data-drop-exists="true" data-reject="true" data-reject-rule-callback="rejectLinks" data-type="{{ $menuItemsIndex }}" data-conflict="{{ $menuItemsIndex }}">
                    <div id="nestable-{{$menuItemsIndex}}" class="nestable dd">
                        <ol class="dd-list">

                            @php($menuItemDynamic = $tableItemsDynamicFilter[$menuItemsIndex])
                            @if($menuItemDynamic->count())
                                @php($menuItemDynamic = $menuItemDynamic->first())
                                @php($text = $menuItemDynamic->lang_name[App::getLocale()]['text'])
                                @if($menuItemDynamic->dynamic)
                                    <li data-id="{{ $menuItemDynamic->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ $menuItemsIndex }}" data-type="tables" data-conflict="{{ $menuItemsIndex }}" data-dynamic="{{ $menuItemsIndex }}" data-menu="{{ $menu }}">
                                        <div class='dd-handle dd3-handle move'>{{ $text ?? $menuItemDynamic->morph_code }}</div>
                                        <div class='dd3-content'>
                                            <span class="hand">{{ $text ?? $menuItemDynamic->morph_code }} ({{ trans('utilities::app.dynamic') }})</span>
                                        </div>
                                    </li>
                                @endif
                            @endif

                            @if($menuItemsCollection->count())
                                @foreach($menuItemsCollection as $index => $link)
                                    @php($text = $link->lang_name[App::getLocale()]['text'])
                                    <li data-id="{{ $link->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ \Illuminate\Support\Str::slug($text) }}" data-conflict="{{ $menuItemsIndex }}" data-type="{{ $menuItemsIndex }}" data-menu="{{ $menu }}">
                                        <div class='dd-handle dd3-handle move'>{{ $text ?? $link->code }}</div>
                                        <div class='dd3-content'>
                                            <span class="hand">{{ $text ?? $link->code }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            @endif

                        </ol>
                    </div>
                </div>
            @endcomponent
        @endforeach
    </div>
</div>
