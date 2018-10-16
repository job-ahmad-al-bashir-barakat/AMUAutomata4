@php ($title = 'Translation Manager')
@extends('admin::layouts.layout')
@section('content_header')
    @include('admin::layouts._content_header' ,['title', $title])
@endsection
@section('content')
    <div class="container-fluid">
        @if(Session::has('successPublish'))
            <div class="alert alert-info">
                {{ Session::get('successPublish') }}
            </div>
        @endif
        <form role="form" method="POST"
              action="{{ action([Barryvdh\TranslationManager\Controller::class, 'postAddGroup']) }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <p>Choose a group to display the translations.</p>
                <select name="group" id="group" class="form-control group-select">
                    @foreach($groups as $key => $value)
                        <option value="{{ $key }}"{{ $key == $group ? ' selected':'' }} >{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </form>
        @if($group)
            <hr>
            <h4>Total: {{ $numTranslations }}, changed: {{ $numChanged }}</h4>
            <table class="table">
                <thead>
                <tr>
                    <th width="15%">Key</th>
                    @foreach ($locales as $locale)
                        <th>{{ $locale }}</th>
                    @endforeach
                    @can('automata')
                    @if ($deleteEnabled)
                        <th>&nbsp;</th>
                    @endif
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach ($translations as $key => $translation)
                    <tr id="<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>">
                        <td><?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?></td>
                        @foreach ($locales as $locale)
                            @php($t = isset($translation[$locale]) ? $translation[$locale] : null)
                            <td>
                                <a href="#edit"
                                   class="editable status-{{ $t ? $t->status : 0 }} locale-{{ $locale }}"
                                   data-locale="{{ $locale }}"
                                   data-name="<?php echo $locale . "|" . htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>"
                                   id="username" data-type="textarea" data-pk="{{ $t ? $t->id : 0 }}"
                                   data-url="{{ $editUrl }}"
                                   data-title="Enter translation"><?php echo $t ? htmlentities($t->value, ENT_QUOTES, 'UTF-8', false) : '' ?></a>
                            </td>
                        @endforeach
                        @can('automata')
                        @if($deleteEnabled)
                            <td>
                                <a href="{{ action([Barryvdh\TranslationManager\Controller::class, 'postDelete'], [$group, $key]) }}"
                                   class="delete-key"
                                   data-confirm="Are you sure you want to delete the translations for '<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>?"><span
                                            class="fa fa-trash-o"></span></a>
                            </td>
                        @endif
                        @endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
        <fieldset>
            <legend>Export all translations</legend>
            <form class="form-inline form-publish-all" method="POST"
                  action="{{ action([Barryvdh\TranslationManager\Controller::class, 'postPublish'], '*') }}"
                  data-remote="true" role="form"
                  data-confirm="Are you sure you want to publish all translations group? This will overwrite existing language files.">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary" data-disable-with="Publishing..">Publish all</button>
            </form>
        </fieldset>
    </div>
@stop
@section('footer')
    <script>
        jQuery(document).ready(function ($) {
            $('.editable').editable().on('hidden', function (e, reason) {
                var locale = $(this).data('locale');
                if (reason === 'save') {
                    $(this).removeClass('status-0').addClass('status-1');
                }
                if (reason === 'save' || reason === 'nochange') {
                    var $next = $(this).closest('tr').next().find('.editable.locale-' + locale);
                    setTimeout(function () {
                        $next.editable('show');
                    }, 300);
                }
            });
            $('.group-select').on('change', function () {
                var group = $(this).val();
                var url = '';
                if (group) {
                    url = '/' + $(this).val();
                }

                $.pjax({
                    url: '{{ action([Barryvdh\TranslationManager\Controller::class, 'getView']) }}' + url,
                    container: '#pjax-container'
                });
            });
            $("a.delete-key").click(function (event) {
                event.preventDefault();
                var row = $(this).closest('tr');
                var url = $(this).attr('href');
                var id = row.attr('id');
                $.post(url, {id: id}, function () {
                    row.remove();
                });
            });
            $('.form-import').on('ajax:success', function (e, data) {
                $('div.success-import strong.counter').text(data.counter);
                $('div.success-import').slideDown();
                window.location.reload();
            });
            $('.form-find').on('ajax:success', function (e, data) {
                $('div.success-find strong.counter').text(data.counter);
                $('div.success-find').slideDown();
                window.location.reload();
            });
            $('.form-publish').on('ajax:success', function (e, data) {
                $('div.success-publish').slideDown();
            });
            $('.form-publish-all').on('ajax:success', function (e, data) {
                $('div.success-publish-all').slideDown();
            });
        });
    </script>
@endsection