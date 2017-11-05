<div class="content-heading">
    <!-- START Language list-->
    <div class="pull-right">
        <div class="btn-group">
            <button type="button" data-toggle="dropdown" class="btn btn-default">{{ LaravelLocalization::getCurrentLocaleNative() }}</button>
            <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a  rel="alternate"
                            hreflang="{{$localeCode}}"
                            href="{{LaravelLocalization::getLocalizedURL($localeCode ,preg_replace('/(en|ar)\//' ,"$localeCode/",\URL::current())) }}"
                            {{--class="ajax langs"--}}
                            data-set-lang="{{ $localeCode }}">
                            {{ $properties["{$lang}Lang"] }}
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
