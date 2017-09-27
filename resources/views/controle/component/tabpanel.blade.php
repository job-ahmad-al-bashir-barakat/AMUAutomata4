<div role="tabpanel">
    <!-- Nav tabs-->
    <ul role="tablist" class="nav nav-tabs">
        @foreach($tabs  as $index => $tabObj)
            @php($tab = is_array($tabObj) ? $tabObj['tab'] : $tabObj)
            @php($class = is_array($tabObj) ? $tabObj['class'] : '')
            <li role="presentation" class="@if(!$index) active @endif {{ $class or '' }}">
                <a href="#{{ $tab }}" aria-controls="{{ $tab }}" role="tab" data-toggle="tab">{{ trans("$currentModule::app.$tab") }}</a>
            </li>
        @endforeach
    </ul>
    <!-- Tab panes-->
    <div class="tab-content">
        @foreach($tabs  as $index => $tabObj)
            @php($tab = is_array($tabObj) ? $tabObj['tab'] : $tabObj)
            <div id="{{ $tab }}" role="tabpanel" class="tab-pane @if(!$index) active @endif clearfix">
                {{ ${$tab} }}
            </div>
        @endforeach
    </div>
</div>