<div class="content-heading">
    <!-- START Language list-->
    <div class="pull-right">
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default">{{ LaravelLocalization::getCurrentLocaleNative() }}</button>
            <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                @foreach($langs as $index => $lang)
                    <li>
                        <a  rel="alternate"
                            hreflang="{{$lang['lang_code']}}"
                            href="{{ LaravelLocalization::getLocalizedURL($lang['lang_code'] ,\URL::current()) }}"
                            {{--class="ajax langs"--}}
                            {{--data-set-lang="{{ $lang['lang_code'] }}"--}}
                        >
                            <img src="{{ asset($lang['image_path']) }}" style="margin: 0 3px 3px 3px;">
                            {{ $lang['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- END Language list -->
    {{ $title }}
    {{--<span class="text-sm hidden-xs">
        A complete set of notification posibilities
    </span>--}}

    <ol class="breadcrumb">
        @foreach($path as $index => $singlePath)
            <li @if(!$singlePath->url_path) class="active" @endif>
                @if($singlePath->url_path)
                    <a {{ $singlePath->url_path ? "href=$singlePath->url_path class=ajax" : "href=#" }}>{{ trans("$module::app.{$singlePath->page->control_page_code}") }}</a>
                @else
                    {{ trans("$module::app.{$singlePath->page->control_page_code}") }}
                @endif
            </li>
        @endforeach
    </ol>
</div>
