@php
     extract($gridSystemResult);
@endphp

<div class='form-group {{ $global }}'>
    <label class='{{ $label }} control-label' for='{{ $name }}'>{{ $title }} @if($star) <span class='text-danger'>*</span> @endif</label>
    <div class="{{ $input }}">
        <select id='{{ $id }}'
                data-datavalue='{{ $data }}'
                name='{{ $name }}'
                class='form-control datatable-autocomplete {{ $class }}'
                data-letter='0'
                data-target='{{ $target }}'
                data-placeholder='{{ $title }}'
                tabindex='1'
                data-remote='{{ $url }}'
                style='width: 99.9%'
                data-collabel = '{{ $colLabel }}'
                data-editable = 'true'
                {{ $attr }}
        >
        </select>
        <div id='error_{{ $id }}'></div>
    </div>
</div>