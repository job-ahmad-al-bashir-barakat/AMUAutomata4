<div role="alert" class="alert alert-{{ $type }} alert-dismissible fade in {{ $class }}" style="padding: 15px;">
    @if($dismiss)
        <button type="button" data-dismiss="alert" aria-label="Close" class="close" style="right: 0;">
            <span aria-hidden="true">×</span>
        </button>
    @endif
    {!! $text !!}
</div>