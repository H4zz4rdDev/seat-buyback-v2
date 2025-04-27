<?php

return [
    'seatbuybackv2' => [
        'name' => 'menu-entry-name',
        'label' => 'seatbuybackv2::menu.main_level',
        'plural' => true,
        'icon' => 'fas fa-certificate',
        'route_segment' => 'seatbuybackv2',
        'permission' => 'seatbuybackv2.view',
        'entries' => [
            [
                'name' => 'seatbuybackv2-home-sub-menu',
                'label' => 'seatbuybackv2::menu.sub-home-level',
                'icon' => 'fas fa-home',
                'route' => 'seatbuybackv2.home',
                'permission' => 'seatbuybackv2.view'
            ],
        ],
    ]
];