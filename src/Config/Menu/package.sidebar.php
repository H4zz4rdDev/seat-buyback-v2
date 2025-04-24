<?php

return [
    'SeatBuybackV2' => [
        'name' => 'menu-entry-name',
        'label' => 'SeatBuybackV2::menu.main_level',
        'plural' => true,
        'icon' => 'fas fa-certificate',
        'route_segment' => 'SeatBuybackV2',
        'permission' => 'SeatBuybackV2.view',
        'entries' => [
            [
                'name' => 'SeatBuybackV2-home-sub-menu',
                'label' => 'SeatBuybackV2::menu.sub-home-level',
                'icon' => 'fas fa-home',
                'route' => 'SeatBuybackV2.home',
                'permission' => 'SeatBuybackV2.view'
            ],
        ],
    ]
];