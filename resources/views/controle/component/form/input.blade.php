@php
    /*
        // class can be used to do some stuff
        group -> add group
        no-label -> remove label
        cont class  -> c:
        label class -> l:
        input class -> i:
    */
    extract(formClassHelper($class));
    $star  = preg_match('/\b(?<![\S])(required)(?![\S])\b/',$class) ? 'star' : '';
    $langs = preg_match('/\b(?<![\S])(langs)(?![\S])\b/',$class) ? true : false;
    $trans = preg_match('/\b(?<![\S])(trans)(?![\S])\b/',$class) ? true : false;
@endphp

@if($langs)
    @foreach(LaravelLocalization::getSupportedLocales() as $_lang => $item)
        @include('controle.component.form._input')
    @endforeach
@else
    @include('controle.component.form._input')
@endif

