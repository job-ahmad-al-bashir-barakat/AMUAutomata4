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
                            class="ajax langs"
                            data-set-lang="{{ $localeCode }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- END Language list -->
    {{ $title }}
    {{--<span class="text-sm hidden-xs" data-localize="dashboard.WELCOME">
        A complete set of notification posibilities
    </span>--}}

    <ol class="breadcrumb">
        <li><a href="#">Home</a>
        </li>
        <li><a href="#">Elements</a>
        </li>
        <li class="active">Notifications</li>
    </ol>
</div>
