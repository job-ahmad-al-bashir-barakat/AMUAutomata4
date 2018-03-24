@php
    $addSuccessFunc             = $addSuccessFunc             && isset($addSuccessFunc)             ? "data-ajax-form-add-success=$addSuccessFunc"        : '';
    $updateSuccessFunc          = $updateSuccessFunc          && isset($updateSuccessFunc)          ? "data-ajax-form-update-success=$updateSuccessFunc"  : '';
    $deleteSuccessFunc          = $deleteSuccessFunc          && isset($deleteSuccessFunc)          ? "data-ajax-form-delete-success=$deleteSuccessFunc"  : '';

    $extraSerializeAdd          = $extraSerializeAdd          && isset($extraSerializeAdd)          ? "data-extra-serialize=$extraSerializeAdd"           : '';
    $extraSerializeUpdate       = $extraSerializeUpdate       && isset($extraSerializeUpdate)       ? "data-extra-serialize=$extraSerializeUpdate"        : '';
    $extraSerializeDelete       = $extraSerializeDelete       && isset($extraSerializeDelete)       ? "data-extra-serialize=$extraSerializeDelete"        : '';

    $addSerialize               = $addSerialize               && isset($addSerialize)               ? $addSerialize                                       : true;
    $updateSerialize            = $updateSerialize            && isset($updateSerialize)            ? $updateSerialize                                    : true;
    $deleteSerialize            = $deleteSerialize            && isset($deleteSerialize)            ? $deleteSerialize                                    : true;

    $stopAddOperationMessage    = $stopAddOperationMessage    ? "data-stop-operation-message" : '';
    $stopUpdateOperationMessage = $stopUpdateOperationMessage ? "data-stop-operation-message" : '';
    $stopDeleteOperationMessage = $stopDeleteOperationMessage ? "data-stop-operation-message" : '';
@endphp

<button type='submit' id="delete" name="delete" class='btn btn-danger delete' data-method="delete" data-state="update" {{ $stopAddOperationMessage }} {{ $deleteSuccessFunc }} {{ $extraSerializeDelete }} data-serialize="{{ $deleteSerialize }}">{{ trans('form-component::form.delete') }}</button>
<button type='submit' id="update" name="update" class='btn btn-success update' data-method="put" data-state="update" {{ $stopUpdateOperationMessage }} {{ $updateSuccessFunc }} {{ $extraSerializeUpdate }} data-serialize="{{ $updateSerialize }}">{{ trans('form-component::form.update') }}</button>
<button type='submit' id="add" name="add" class='btn btn-primary add' data-method="post" data-state="add" {{ $stopDeleteOperationMessage }} {{ $addSuccessFunc }} {{ $extraSerializeAdd }} data-serialize="{{ $addSerialize }}">{{ trans('form-component::form.add') }}</button>
