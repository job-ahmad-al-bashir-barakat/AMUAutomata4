@php($facultySlug = \Route::input('faculty'))
@php($facultyId = getIdFromSlug($facultySlug))
@php($degrees = \Modules\Admin\Entities\Degree::whereFacultyId($facultyId)->get())
<div class="col-md-{{ $data['width'] }} mt-40">
    <div class="panel panel-info">
        <div class="panel-heading">Degrees</div>
        <div class="table-responsive">
            <table class="table  table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($degrees as $degree)
                    <tr>
                        <td>{{ $degree->lang_name[$lang]->text }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>