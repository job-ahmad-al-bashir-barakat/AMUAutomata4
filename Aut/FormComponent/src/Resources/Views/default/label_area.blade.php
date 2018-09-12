@php
    /*
        // class can be used to do some stuff
        cont class  -> c:
        label class -> l:
        input class -> i:
    */

    /*
        --- classes ---
        trans : this class mean input name must has trans like trans_name[name_en]
        langs : this class mean input will repeat foreach lang en,ar.....et
    */
    extract(formClassHelper($class));
    $star  = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class)           ? 'star'    : '';
    $langs = $hasLangs || preg_match('/\b(?<![\S])(langs)(?![\S])\b/',$class) ? $langs    : false;
    $trans = $hasTrans || preg_match('/\b(?<![\S])(trans)(?![\S])\b/',$class) ? $hasTrans : false;
@endphp

@if($langs)
    @foreach($langs as $_lang => $item)
        @include('form-component::default._label_area')
    @endforeach
@else
    @include('form-component::default._label_area')
@endif