<?php

return [
    'flatrate' => [
        'code'             => 'flatrate',
        'title'            => 'Flat Rate',
        'description'      => 'Flat Rate Shipping',
        'active'           => true,
        'is_calculate_tax' => true,
        'default_rate'     => '10',
        'type'             => 'per_unit',
        'default'          => 1,
        'class'            => 'Webkul\Shipping\Carriers\FlatRate',
    ],

    'free'     => [
        'code'             => 'free',
        'title'            => 'Free Shipping',
        'description'      => 'Free Shipping',
        'active'           => true,
        'is_calculate_tax' => true,
        'default_rate'     => '0',
        'default'          => 1,
        'class'            => 'Webkul\Shipping\Carriers\Free',
    ]
];
