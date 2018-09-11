@php
    $id     = isset($id) ? $id : "";
@endphp
<div id="{{ $id }}" role="tablist" aria-multiselectable="true" class="panel-group">

    @foreach($panels as $index => $panel)
        <div class="panel panel-{{ $panelType ?? 'default' }}">
            <div id="{{ "heading_{$panel}_{$index}" }}" role="tab" class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#{{ $id }}" href="{{ "#collapse_{$panel}_{$index}" }}" aria-expanded="true" aria-controls="collapseOne">
                        {{ trans("$currentModule::app.$panel") }}
                    </a>
                </h4>
            </div>
            <div id="{{ "collapse_{$panel}_{$index}" }}" role="tabpanel" aria-labelledby="{{ "heading_{$panel}_{$index}" }}" class="panel-collapse collapse {{ $index == 1 ? "in" : "" }}">
                <div class="panel-body">
                    {{ ${$panel} }}
                </div>
            </div>
        </div>
    @endforeach
</div>