@php
    $id    = isset($id)    ? "modal-{$id}-input-location" : 'modal-input-location';
    $title = isset($title) ? $title : '';
    $width = isset($width) ? $width : false;
@endphp

@component('controle.component.modal', [
    'id'                => $id,
    'title'             => $title,
    'stopForm'          => true,
    'width'             => $width,
    'bodyClass'         => 'p-0',
])
    <div data-gmap="" data-address="276 N TUSTIN ST, ORANGE, CA 92867" data-maptype="ROADMAP" data-styled class="gmap"></div>

    {{ $slot or '' }}

    @slot('footer')
        <button type="button" class="btn btn-labeled btn-primary">
            {{ trans('app.set_location') }}
            <span class="btn-label btn-label-right"><i class="icon-location-pin"></i></span>
        </button>
        {{ $footer or '' }}
    @endslot
@endcomponent
