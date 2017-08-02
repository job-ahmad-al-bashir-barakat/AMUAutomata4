<div class='dd-handle dd3-handle move' style="{{ $dir == "rtl" ? "left: 0; right: inherit;" : "" }}">{{ trans('utilities::app.drag') }}</div>
<div class='dd3-content {{ $dir == "rtl" ? "p-10" : "" }}'>
    @foreach($content as $index => $item)
        @if($index === 'html')
            <span class="hand">
                {!! $content['html'] or '' !!}
            </span>
        @else
            <span class="hand"
                  data-toggle='modal'
                  data-target='#modal-{{$model}}-tree'
                  style="text-decoration: underline;"
                  data-editable-target="li"
                  data-form-update="tree">{{ $content['title'] or '' }}</span>
        @endif
    @endforeach
</div>



