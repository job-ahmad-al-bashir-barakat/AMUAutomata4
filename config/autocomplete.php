<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'isLangs' => true,

    'version'    => '5.4',

    'AutocompleteHelperClass' => \App\Library\AutocompleteHelper::class,

    'default'   => [

        'withoutLang' => [
            'colId'     => 'id',
            'colName'   => 'name_{lang}',
            'q'         => [
                'name_{langs}',
            ],
        ],

        /*
         * Langs Way
         */
        'withLang' => [
            'colId'     => 'id',
            'colName'   => 'transName->text',
            'q'         => [
                'transName' => 'text',
            ],
        ]
    ],
];