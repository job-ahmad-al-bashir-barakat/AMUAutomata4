@php
    $successFunc          = $successFunc          && isset($successFunc)          ? "data-ajax-form-success=$successFunc"               : '';
    $addSuccessFunc       = $addSuccessFunc       && isset($addSuccessFunc)       ? "data-ajax-form-add-success=$addSuccessFunc"        : '';
    $updateSuccessFunc    = $updateSuccessFunc    && isset($updateSuccessFunc)    ? "data-ajax-form-update-success=$updateSuccessFunc"  : '';
    $deleteSuccessFunc    = $deleteSuccessFunc    && isset($deleteSuccessFunc)    ? "data-ajax-form-delete-success=$deleteSuccessFunc"  : '';
    $extraSerialize       = $extraSerialize       && isset($extraSerialize)       ? "data-extra-serialize=$extraSerialize"              : '';
    $deleteSerialize      = $deleteSerialize      && isset($deleteSerialize)      ? $deleteSerialize                                    : true;
    $stopOperationMessage = $stopOperationMessage && isset($stopOperationMessage) ? "data-stop-operation-message"                       : false;
@endphp

<button type='submit' id="delete" name="delete" class='btn btn-danger delete' data-method="delete" data-state="update" {{ $deleteSuccessFunc }} {{ $successFunc }} {{ $extraSerialize }} data-serialize="{{ $deleteSerialize }}">{{ trans('form-component::form.delete') }}</button>
<button type='submit' id="update" name="update" class='btn btn-success update' data-method="put" data-state="update" {{ $updateSuccessFunc }} {{ $successFunc }} {{ $extraSerialize }}>{{ trans('form-component::form.update') }}</button>
<button type='submit' id="add" name="add" class='btn btn-primary add' data-method="post" data-state="add" {{ $addSuccessFunc }} {{ $successFunc }} {{ $extraSerialize }}>{{ trans('form-component::form.add') }}</button>
