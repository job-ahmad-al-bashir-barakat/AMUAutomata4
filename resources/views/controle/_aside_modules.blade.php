@extends('controle._aside')

@if(\Module::get('utilities'))

    {{-- include section --}}
    @include('utilities::layouts._aside')
    {{--end include section--}}

    @push('_aside_menu')

        @yield('_aside_menu_utilities')

    @endpush

    @push('_aside_setting')

        @yield('_aside_setting_utilities')

    @endpush

@endif

@if(\Module::get('admin'))

    {{-- include section --}}
    @include('admin::layouts._aside')
    {{--end include section--}}

    @push('_aside_menu')

        @yield('_aside_menu_admin')

    @endpush

    @push('_aside_setting')

        @yield('_aside_setting_admin')

    @endpush

@endif





