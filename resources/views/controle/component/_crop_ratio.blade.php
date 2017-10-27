@component('controle.component.panel' ,['title' => trans('app.crop_ratio') ,'active' => true])
    <div class="form-group">
        @foreach($cropRatio as $index => $item)
            <button type="button" data-method="cropResize" data-ratio="{{ $index or '' }}" data-width="{{ $item['width'] }}" data-height="{{ $item['height'] }}" class="btn btn-info btn-block mt">@if(isset($item['title'])) {{ trans("utilities::app.{$item['title']}") }} @else {{ $index }} @endif</button>
        @endforeach
    </div>
@endcomponent