@php
    $i = 0;
    $group_count  = 1;
    $group_sourse = [];
    $tableItemsDynamic->filter(function () use(&$group_count, &$group_sourse){
        $group_sourse[] = $group_count;
        $group_count++;
    });
    $group_sourse = implode(',',$group_sourse);
@endphp

<div class="row">

    <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
        @foreach($menuItems as $menuItemsIndex => $menuItemsCollection )

            @php($title = ($tableItemsDynamic[$menuItemsIndex])->first()->lang_name[App::getLocale()]['text'])
            @component('controle.component.panel' ,[
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
                                    <li data-id="{{ $menuItemDynamic->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ $menuItemsIndex }}" data-type="tables" data-conflict="{{ $menuItemsIndex }}" data-dynamic="{{ $menuItemsIndex }}">
                                        <div class='dd-handle dd3-handle move'>{{ $text or $menuItemDynamic->morph_code }}</div>
                                        <div class='dd3-content'>
                                            <span class="hand">{{ $text or $menuItemDynamic->morph_code }} ({{ trans('utilities::app.dynamic') }})</span>
                                        </div>
                                    </li>
                                @endif
                            @endif

                            @if($menuItemsCollection->count())
                                @foreach($menuItemsCollection as $index => $link)
                                    @php($text = $link->lang_name[App::getLocale()]['text'])
                                    <li data-id="{{ $link->id }}" data-order="" class="dd-item" data-link="1" data-exists="{{ \Illuminate\Support\Str::slug($text) }}" data-conflict="{{ $menuItemsIndex }}" data-type="{{ $menuItemsIndex }}">
                                        <div class='dd-handle dd3-handle move'>{{ $text or $link->code }}</div>
                                        <div class='dd3-content'>
                                           <span class="hand">{{ $text or $link->code }}</span>
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

    <div class="col-lg-6 col-md-6 col-xs-12 mt-sm-10 pull-left">

        <div>
            <div class="alert alert-befault">
                <ul class="fa-ul p0 m0">
                    <li>
                        <div>
                            <label class="control-label">
                                <span class="pull-left" style="
                                    background-color: rgba(215, 235, 255, 0.67);
                                    border: 2px solid rgb(219, 219, 219);
                                    border: 2px solid rgb(219, 219, 219);
                                    margin: 3px 8px; display: flex;
                                    width: 15px;
                                    height: 15px;
                                    border-radius: 4px;"></span>
                                <span>{{ trans('utilities::app.link_items_are_colored' ,['color' => trans('utilities::app.sky')]) }}</span>
                            </label>
                        </div>
                        <div>
                            <label class="control-label">
                                <span class="pull-left" style="
                                    background-color: rgb(255, 255, 255);
                                    border: 2px solid rgb(219, 219, 219);
                                    margin: 3px 8px;
                                    display: flex;
                                    width: 15px;
                                    height: 15px;
                                    border-radius: 4px;"></span>
                                <span>{{ trans('utilities::app.list_items_are_colored' ,['color' => trans('utilities::app.white')]) }}</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            {!! tree($view ,$group_count ,$group_sourse ,10 , 'order',[
                'data-reject'               => 'true',
                'data-drag-end-callback'    => 'dragSiteMenu',
                'data-reject-rule-callback' => 'ruleSiteMenu',
                'data-init'                 => 'true',
                'data-init-callback'        => 'initSiteMenu',
            ]) !!}
        </div>
    </div>
</div>
