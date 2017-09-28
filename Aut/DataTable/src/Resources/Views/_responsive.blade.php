<div class="row">
    <div class="col-md-12">
        <div data-dt-row={!! autDatatableEval('col.rowIndex') !!} data-dt-column={!! autDatatableEval('col.columnIndex') !!}>

            <label class="col-lg-3 col-md-4 col-xs-12 control-label" style="padding: 0;">
                {!! autDatatableEval('col.title') !!} <span>:</span>
            </label>

            <div class="col-lg-9 col-md-8 col-xs-12">
                <b>{!! autDatatableEval('col.data') !!}</b>
            </div>
        </div>
    </div>
</div>