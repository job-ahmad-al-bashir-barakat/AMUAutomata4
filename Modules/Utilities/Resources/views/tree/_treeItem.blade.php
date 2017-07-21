<div class='dd-handle dd3-handle move' style="{{ $dir == "rtl" ? "left: 0; right: inherit;" : "" }}">{{ trans('utilities::app.drag') }}</div>
<div class='dd3-content hand' style="{{ $dir == "rtl" ? "padding: 10px;" : "" }}" data-toggle='modal' data-target='#modal-tree' data-editable-target="li" data-form-update="tree">{{ $title or '' }}</div>



