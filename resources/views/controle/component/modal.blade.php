@php
    $action = isset($action) ? $action : '#';
    $method = isset($method) ? $method : 'post';
@endphp
<div class="ajaxCont">
    <div id='{{ $id }}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' class='modal fade'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                {!! Form::open(['id' => 'form-dialog' ,'url' => $action, 'data-action' => $action, 'method' => $method ,'class' => 'ajax-form']) !!}
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
                        <button type='submit' class='btn btn-danger delete'  data-state="update">{{ trans('app.delete') }}</button>
                        <button type='submit' class='btn btn-success update' data-state="update">{{ trans('app.update') }}</button>
                        <button type='submit' class='btn btn-primary add' data-state="add">{{ trans('app.add') }}</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>