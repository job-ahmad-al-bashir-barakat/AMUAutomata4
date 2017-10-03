@foreach($modules as $module)
{!! $module->getModuleHtml() !!}
@endforeach