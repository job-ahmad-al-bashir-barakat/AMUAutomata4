<div class="col-md-{{ $data['width'] }} mt-40">
    <div class="panel panel-info">
        <div class="panel-heading">@lang('utilities::web-modules.degrees')</div>
        <div class="table-responsive">
            <table class="table  table-striped">
                <thead>
                <tr>
                    <th>@lang('utilities::web-modules.name')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['degrees'] as $degree)
                    <tr>
                        <td>{{ $degree->lang_name[$lang]->text }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>