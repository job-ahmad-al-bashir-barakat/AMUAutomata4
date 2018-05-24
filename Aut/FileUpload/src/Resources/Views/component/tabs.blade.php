<div class="form-group">
    <div role="tabpanel">
        <!-- Nav tabs-->
        <ul role="tablist" class="nav nav-tabs">
            @foreach($tabs as $tab)
                @php extract($tab) @endphp
                <li role="presentation" class="{{ $active ? 'active' : '' }} {{ $class }}">
                    <a data-tab="{{ $id }}" href="#{{ $id }}" data-toggle="tab" style="border-{{ fileUploadPosition() }}: 0;">{{ $title }}</a>
                </li>
            @endforeach
        </ul>
        <!-- Tab panes-->
        <div class="tab-content clearfix" style="border: none;">
            @foreach($tabs as $index => $tab)
                @php extract($tab) @endphp
                <div id="{{ $id }}" data-tab="{{ $id }}" role="tabpanel" class="tab-pane fade in {{ $active ? 'active' : '' }}">{!! $filesUpload[$index] !!}</div>
            @endforeach
        </div>
    </div>
</div>