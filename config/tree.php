<?php

return [

    'control' => [
        'model'        => \Modules\Utilities\Entities\ControlMenu::class,
        'factory'      => \Modules\Utilities\Factories\Tree\ControlMenuFactory::class,
    ],

    'general' => [
        'model'        => \Modules\Utilities\Entities\SiteMenu::class,
        'factory'      => \Modules\Utilities\Factories\Tree\SiteMenuFactory::class,
    ],

];