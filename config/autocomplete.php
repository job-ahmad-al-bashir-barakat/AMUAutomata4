<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'isLangs' => true,

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