@php
    extract($gridSystemResult);
@endphp

<div class='form-group {{ $global }}'>
    @if(!preg_match('/\b(?<![\S])(noLabel)(?![\S])\b/',$class))
        <label class='{{ $label }} control-label' for='{{ $name }}'>{{ $title }} @if($star) <span class='text-danger'>*</span> @endif </label>
    @endif
    <div class='{{ $input }}'>
        <textarea id='{{ $id }}'
                  data-datavalue='{{ $data }}'
                  name='{{ $name }}'
                  placeholder='{{ $title }}'
                  class='form-control {{ $class }}'
                  style='resize:vertical;'
                  data-editable = 'true'
                  {{ $attr }}
        ></textarea>
        <div id='error_{{ $id }}'></div>
    </div>
</div>