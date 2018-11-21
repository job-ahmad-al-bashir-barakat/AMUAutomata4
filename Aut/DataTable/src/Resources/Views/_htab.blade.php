<div class="form-group col-lg-12 col-md-12">
    <div role="tabpanel">
        <!-- Nav tabs-->
        <ul role="tablist" class="nav nav-tabs">
            @foreach($htabs as $tab)
                @php extract($tab) @endphp
                <li role="presentation" class="{{ $active ? 'active' : '' }} {{ $class }}"><a  data-tab="{{ $id }}" href="#{{ $id }}" data-toggle="tab">{!! $title !!} @if($star)<span class='text-danger'>*</span>@endif</a></li>
            @endforeach
        </ul>
        <!-- Tab panes-->
        <div class="tab-content clearfix">
            @foreach($htabs as $tab)
                @php extract($tab) @endphp
                <div id="{{ $id }}" data-tab="{{ $id }}" class="tab-pane fade in {{ $active ? 'active' : '' }}">{!! $content !!}</div>
            @endforeach
        </div>
    </div>
</div>