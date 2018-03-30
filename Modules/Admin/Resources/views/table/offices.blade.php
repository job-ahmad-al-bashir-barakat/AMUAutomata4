@component('controle.component.modal', [
    'id'                  => 'office-addresses-custom',
    'title'               => trans('admin::app.addresses'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('contact-addresses' ,'' ,'false') !!}
@endcomponent

@component('controle.component.modal', [
    'id'                  => 'office-numbers-custom',
    'title'               => trans('admin::app.numbers'),
    'stopForm'            => true,
    'stopFooter'          => true,
    'bodyClass'           => 'p0'
])
    {!! datatable('contact-numbers' ,'' ,'false') !!}
@endcomponent

{!! autGoogleMap('university-office',trans('admin::app.niversity_office_gelocation'),'',10,setting('UGL')->value,'#datatable-university-office-modal .input-location input') !!}

<script>
    function openAddressesModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#office-addresses-custom', "?id=" + $($this).data('contact'));
    }

    function openNumbersModal($this)
    {
        _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable('#office-numbers-custom', "?id=" + $($this).data('contact'));
    }
</script>
