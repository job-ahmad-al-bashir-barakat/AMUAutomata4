<div class="form-group">
    <div role="tabpanel">
        <!-- Nav tabs-->
        <ul role="tablist" class="nav nav-tabs">
            @foreach($tabs as $tab)
                @php extract($tab) @endphp
                <li role="presentation" class="{{ $active ? 'active' : '' }} {{ $class }}">
                    <a  data-tab="{{ $id }}" href="#{{ $id }}" aria-controls="{{ $id }}" role="tab" data-toggle="tab" aria-expanded="{{ $active }}" style="border-{{ fileUploadDirection() }}: 0;">{{ $title }}</a>
                </li>
            @endforeach
        </ul>
        <!-- Tab panes-->
        <div class="tab-content clearfix" style="border: none;">
            @foreach($tabs as $index => $tab)
                @php extract($tab) @endphp
                <div id="{{ $id }}" data-tab="{{ $id }}" role="tabpanel" class="tab-pane {{ $active ? 'active' : '' }}">{!! $filesUpload[$index] !!}</div>
            @endforeach
        </div>
    </div>
</div>