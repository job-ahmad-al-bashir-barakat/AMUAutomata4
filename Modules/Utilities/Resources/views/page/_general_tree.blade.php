<div class="row">

    @include('utilities::page._general_tree_ajax')

    <div class="col-lg-6 col-md-6 col-xs-12 mt-sm-10 pull-left">

        <div>
            <div class="alert alert-befault">
                <ul class="fa-ul p0 m0">
                    <li>
                        <div>
                            <label class="control-label">
                                <span class="pull-left" style="
                                    background-color: rgba(215, 235, 255, 0.67);
                                    border: 2px solid rgb(219, 219, 219);
                                    border: 2px solid rgb(219, 219, 219);
                                    margin: 3px 8px; display: flex;
                                    width: 15px;
                                    height: 15px;
                                    border-radius: 4px;"></span>
                                <span>{{ trans('utilities::app.link_items_are_colored' ,['color' => trans('utilities::app.sky')]) }}</span>
                            </label>
                        </div>
                        <div>
                            <label class="control-label">
                                <span class="pull-left" style="
                                    background-color: rgb(255, 255, 255);
                                    border: 2px solid rgb(219, 219, 219);
                                    margin: 3px 8px;
                                    display: flex;
                                    width: 15px;
                                    height: 15px;
                                    border-radius: 4px;"></span>
                                <span>{{ trans('utilities::app.list_items_are_colored' ,['color' => trans('utilities::app.white')]) }}</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            {!! tree($view ,$group_count ,$group_sourse ,10 , 'order',[
                'data-reject'               => 'true',
                'data-drag-end-callback'    => 'dragSiteMenu',
                'data-reject-rule-callback' => 'ruleSiteMenu',
                'data-init'                 => 'true',
                'data-init-callback'        => 'initSiteMenu',
            ]) !!}
        </div>
    </div>
</div>
