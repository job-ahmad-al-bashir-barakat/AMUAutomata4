@if($build_table_column)
    @section('column')
    <th class='{{ $choosen }} {{ $param['printable'] }}' style='max-width: {{ $param['width'] }};'>{{ $param['title'] }}</th>
@endsection
@endif

@if($build_table_filter)
    @section('filter')

        @if(!in_array($param["type"],['index','hidden','button' ,'detail']))

            @switch ($param["type"])

                @case('select')

                <th>
                    <select class='form-control filter-select datatable-select' style='width: 100%;' data-placeholder='{{ $param['title'] }}'>
                        <option></option>
                        @foreach ($param['obj'] as $key => $value)
                            <option value='{{ $key }}'>{{ $value }}</option>
                        @endforeach
                    </select>
                </th>

                @default
                <th>
                    <input type='text' placeholder='{{ $transFilter }} {{ $param['title'] }}' class='form-control filter-Input'>
                </th>

            @endswitch

        @else
            <th></th>
        @endif

    @endsection
@endif

@if($build_table_table)
    @section('table')
        <table id='{{ $id }}' class='{{ $class }} custom-table' style='width: 100%;'>

            <thead>
                <tr>{!! $html_header !!}</tr>
            </thead>

            <tbody @if($sortable) class='sortable' @endif></tbody>

            @if($footer)

                <tfoot>
                    @if($filter)
                        <tr class='filter-datatable-cont'>{!! $html_filter !!}</tr>
                    @endif

                    @if($buttonResponsive)
                        <tr><th class='table-button' colspan='{{ $count }}'></th></tr>
                    @endif
                </tfoot>

            @endif

        </table>
    @endsection
@endif
