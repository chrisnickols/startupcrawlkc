<?php

$locations = [
    'bb' => 'BetaBlox',
    'ds' => 'DeviceShops',
    'ec' => 'ECJC',
    'gf' => 'Google Fiber',
    'sv' => 'KCSV',
    'op' => 'OfficePort',
    'sa' => 'Sprint Accelerator',
    'ts' => 'The Sundry',
    'tb' => 'Think Big Partners',
    'ub' => 'Uber',
];

$startups = [
    
    // Beta Blox
    'bb' => [
        [
            'name' => 'Chocolate &amp; Cork',
            'url' => '',
            'info' => ''
        ]
    ],

    // Device Shop
    'ds' => [
        [
            'name' => 'Whobaloo',
            'url' => 'http://whobaloo.com',
            'info' => 'Whobaloo is cloud based graphic design tools for non-designers. Easily create designs for business cards, party invitations or a birthday card.'
        ], [
            'name' => 'Sherpa Innovation',
            'url' => 'http://sherpainnovation.com',
            'info' => 'Make mobile stuff.'
        ],
    ],

    // ECJC
    'ec' => [

    ],

    // Google Fiber
    'gf' => [

    ],

    // KCSV
    'sv' => [

    ],

    // OfficePort
    'op' => [

    ],

    // Sprint Accelerator
    'sa' => [

    ],

    // The Sundry
    'ts' => [

    ],

    // Think Big Partners
    'tb' => [

    ],

    // Uber
    'ub' => [
        [
            'name' => 'Flokk',
            'url' => '',
            'info' => ''
        ]
    ],
];



asort($locations);

$keys = array_keys($startups);
$size = count($keys);
for ($i = 0; $i < $size; ++$i) {
    if (!empty($startups[$keys[$i]])) {
        $names = [];
        foreach ($startups[$keys[$i]] as $key => $row) {
            $names[$key] = $row['name'];
        }
        array_multisort($names, SORT_ASC, $startups[$keys[$i]]);
    }
}