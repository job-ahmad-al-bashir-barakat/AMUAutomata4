<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'isLangs' => false,

    'AutocompleteHelperClass' => \App\Library\AutocompleteHelper::class,

    'default'   => [

        /*
         * Langs Way
         */
        'colId'   => 'id',
        'colName' => 'transName->text',
        'has'   => [
            'transName' => 'text',
        ],
    ],
];