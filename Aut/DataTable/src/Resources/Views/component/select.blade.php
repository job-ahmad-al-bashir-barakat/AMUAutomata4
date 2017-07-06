@php
    extract($gridSystemResult);
@endphp

<div class='form-group {{ $global }}'>
    <label class='{{ $label }} control-label' for='{{ $name }}'>{{ $title }} @if($star) <span class='text-danger'>*</span> @endif </label>
    <div class='{{ $input }}'>
        <select id='{{ $id }}'
                data-datavalue='{{ $data }}'
                name='{{ $name }}'
                class='form-control {{ $class }}'
                data-collabel = '{{ $colLabel }}'
                data-editable = 'true'
                {{ $attr }}
        >
            <option></option>
            @foreach($options as $key => $item)
                <option value='{{ $key }}'>{{ $item }}</option>
            @endforeach
        </select>
        <div id='error_{{ $id }}'></div>
    </div>
</div>