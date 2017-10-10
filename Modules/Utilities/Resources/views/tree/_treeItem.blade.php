<div class='dd-handle dd3-handle move'>{{ trans('utilities::app.drag') }}</div>
<div class='dd3-content'>
    @foreach($content as $index => $item)
        @if($index === 'icons')
            <span>
                {!! $content['icons'] or '' !!}
            </span>
        @elseif ($index === 'link')
            <span class="hand"
                  data-toggle='modal'
                  data-target='#modal-{{$model}}-tree'
                  style="text-decoration: underline;"
                  data-editable-target="li"
                  data-form-update="tree">
                {{ $content['link'] or '' }}
            </span>
        @elseif ($index === 'html')
            {{--$content['html']--}}
        @else
            <span>
                {{ $content['title'] or '' }}
            </span>
        @endif
    @endforeach
</div>



