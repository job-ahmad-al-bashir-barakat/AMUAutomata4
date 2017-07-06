<?php

return [

    'isDebug' => true,

    'version' => '5.4',

    'multiModel' => true,

    'customResponsiveTemplete' => false,

    'gridSystem' => [
        'formHorizontal' => false,
        'global'         => [ 'cols' => 6, 'type' => 'lg|md' ],
        'label'          => [ 'cols' => 3, 'type' => 'lg' ],
        'input'          => [ 'cols' => 8, 'type' => 'lg' ]
    ],

    'functionCase' => [
        'factory'    => 'camelCase',
        'maker'      => 'snakeCase',
    ],

    'dialog_form_class' => 'ajax-form',

    'dialog_form_attr' => '',

    'choosen'  => 'not-choosen',

    'spinners' => [

        'type'    => 'line-scale',
        'overlay' => 'spinners-overlay'
    ],

    'button_position' => "B<'row'<'col-lg-4 datatable-pull-left'l><'col-lg-4 datatable-pull-right'f>>tr<'row'<'col-lg-4 datatable-pull-left'i><'col-lg-6 datatable-pull-right'p>>",

    'icon' => [
        'update'         => 'icon icon-wrench',
        'delete'         => 'icon icon-trash',
        'add'            => 'fa fa-plus',
        'reload'         => 'fa fa-refresh',
        'choosen'        => 'fa fa-reorder',
        'print'          => 'fa fa-print',
        'pdf'            => 'fa fa-file-pdf-o',
        'csv'            => 'fa fa-file-text-o',
        'excel'          => 'fa fa-file-excel-o',
        'copy'           => 'fa fa-files-o',
        'code'           => 'fa fa-code',
        'destroy'        =>'fa fa-retweet'
    ],

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'event' => [

        'onLoad' => function() {

            return
                "
                <script>
                    //APP_AMU.ckeditor.init('body' ,'textarea.datatable-text-editor');
                    //APP.COLLAPSE_PANELS();
                </script>
            ";
        },

        'modalClose' => function() {

            return
                "
                <script>
                    //APP_AMU.ckeditor.clear('body' ,'textarea.datatable-text-editor');
                </script>
            ";
        },

        'onTabClick' => function() {

            return
                "
                <script>
                    //if(cont.find('.cropper').length)
                    //{
                    //    APP.CROPPER.destroy('.modal .cropper');
                    //    APP.CROPPER.init();
                    //}
                </script>
            ";
        },

        'onRowDetailClick'  => function() {

            return "";
        },

        'onDestroy' => function() {

            return "";
        }
    ],

];
