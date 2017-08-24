{{-- modal param --}}
{{--
-------------------------------------------
id     : for set id for modal
action : set action for form
method : set method form form
attr   : set attr for from
title  : set title for modal
-------------------------------------------
successFunc : set success funcName after add or update or delete
addSuccessFunc    : set success funcName for add button
updateSuccessFunc : set success funcName for udate button
deleteSuccessFunc : set success funcName for delete button
stopDeleteSerialize : true/false -- in some cases you may need to serialize data with delete

> you must declare this func in you page if you need to do something
> this func return res response
-------------------------------------------
stopForm : true/false -- for some case you may need to stop form
stopButton : remove all button without close
-------------------------------------------
--}}
@php
    $action = isset($action) ? $action : '#';
    $method = isset($method) ? $method : 'post';
    $attr   = isset($attr)   ? $attr   : [];
    $width  = isset($width)  ? $width  : false;

    $successFunc          = isset($successFunc)         ? "data-ajax-form-success=$successFunc"               : '';
    $deleteSuccessFunc    = isset($deleteSuccessFunc)   ? "data-ajax-form-delete-success=$deleteSuccessFunc"  : '';
    $updateSuccessFunc    = isset($updateSuccessFunc)   ? "data-ajax-form-update-success=$updateSuccessFunc"  : '';
    $addSuccessFunc       = isset($addSuccessFunc)      ? "data-ajax-form-add-success=$addSuccessFunc"        : '';
    $stopDeleteSerialize  = isset($stopDeleteSerialize) ? $stopDeleteSerialize : false;
    $stopForm             = isset($stopForm)            ? $stopForm : false;
    $stopButton           = isset($stopButton)          ? $stopButton : false;
@endphp
@unless($stopForm)
<div class="ajaxCont">
@endunless
    <div id='{{ $id or '' }}' {{--tabindex='-1'--}} role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' class='modal fade'>
        <div class='modal-dialog' role='document' style="{{ $width ? "width: $width;" : "" }};">
            <div class='modal-content'>
                @unless($stopForm)
                    {!! Form::open(array_merge(['id' => 'form-dialog' ,'url' => $action, 'method' => $method ,'class' => 'ajax-form'] ,$attr)) !!}
                @endunless
                <div class='modal-header'>
                    <button type='button' data-dismiss='modal' aria-label='Close' class='close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <h4 id='myModalLabel' class='modal-title'>
                        {{ $title or '' }}
                    </h4>
                </div>
                <div class='modal-body clearfix {{ $bodyClass or '' }}'>
                    {{ $slot }}
                </div>
                <div class='modal-footer'>

                    <button type='button' data-dismiss='modal' class='btn btn-default'>{{ trans('app.close') }}</button>
                    @unless($stopForm || $stopButton)
                        <button type='submit' id="delete" name="delete" class='btn btn-danger delete' data-method="delete" data-state="update" {{ $deleteSuccessFunc }} {{ $successFunc }} @if($stopDeleteSerialize) data-serialize="false" @endif>{{ trans('app.delete') }}</button>
                        <button type='submit' id="update" name="update" class='btn btn-success update' data-method="put" data-state="update" {{ $updateSuccessFunc }} {{ $successFunc }}>{{ trans('app.update') }}</button>
                        <button type='submit' id="add" name="add" class='btn btn-primary add' data-method="post" data-state="add" {{ $addSuccessFunc }} {{ $successFunc }}>{{ trans('app.add') }}</button>
                    @endunless
                    {{ $footer or '' }}
                </div>
                @unless($stopForm)
                    {!! Form::close() !!}
                @endunless
            </div>
        </div>
    </div>
@unless($stopForm)
</div>
@endunless