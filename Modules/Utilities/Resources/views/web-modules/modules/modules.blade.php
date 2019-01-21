@foreach($modules as $module)
    @if($module)
        {!! $module->getModuleHtml() !!}
    @endif
@endforeach