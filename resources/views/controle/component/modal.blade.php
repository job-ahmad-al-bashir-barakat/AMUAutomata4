@php
    $action = isset($action) ? $action : '#';
    $method = isset($method) ? $method : 'post';
    $attr   = isset($attr)   ? $attr   : [];

    $successFunc        = isset($successFunc)       ? "data-ajax-form-success=$successFunc"               : '';
    $deleteSuccessFunc  = isset($deleteSuccessFunc) ? "data-ajax-form-delete-success=$deleteSuccessFunc"  : '';
    $updateSuccessFunc  = isset($updateSuccessFunc) ? "data-ajax-form-update-success=$updateSuccessFunc"  : '';
    $addSuccessFunc     = isset($addSuccessFunc)    ? "data-ajax-form-add-success=$addSuccessFunc"        : '';
    $deleteSerialize    = isset($deleteSerialize)   ? $deleteSerialize : false;
@endphp
<div class="ajaxCont">
    <div id='{{ $id }}' {{--tabindex='-1'--}} role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' class='modal fade'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                {!! Form::open(array_merge(['id' => 'form-dialog' ,'url' => $action, 'data-action' => $action, 'method' => $method ,'class' => 'ajax-form'] ,$attr)) !!}
                    <div class='modal-header'>
                        <button type='button' data-dismiss='modal' aria-label='Close' class='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                        <h4 id='myModalLabel' class='modal-title'>
                            {{ $title or '' }}
                        </h4>
                    </div>
                    <div class='modal-body clearfix'>
                        {{ $slot }}
                    </div>
                    <div class='modal-footer'>
                        <button type='button' data-dismiss='modal' class='btn btn-default'>{{ trans('app.close') }}</button>
                        <button type='submit' id="delete" name="delete" class='btn btn-danger delete'  data-state="update" {{ $deleteSuccessFunc }} {{ $successFunc }} @if(!$deleteSerialize) data-delete-unserialize="true" @endif>{{ trans('app.delete') }}</button>
                        <button type='submit' id="update" name="update" class='btn btn-success update' data-state="update" {{ $updateSuccessFunc }} {{ $successFunc }}>{{ trans('app.update') }}</button>
                        <button type='submit' id="add" name="add" class='btn btn-primary add' data-state="add" {{ $addSuccessFunc }} {{ $successFunc }}>{{ trans('app.add') }}</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>