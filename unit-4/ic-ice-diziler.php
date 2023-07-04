<?php

$kategoriler = [
    'siteler' => [
        'e-ticaret' =>[
            'sahibinden',
            'trendyol',
            'alibaba',
            'amazon',

        ],
        'egitim' => [
            'udemy',
            'coursera',
            'edx',
        ]
    ]
];
//print $kategoriler['siteler']['e-ticaret'][2];
//print_r($kategoriler);

define('uye',[
    'name' =>'ugurcan',
    'surname' =>'guneysu',
    'meslek' => 'ogrenci',
    'yas' => 21,
    'hobiler' =>[
        'bisiklet',
        'satranç'
    ]
]);
//print_r( uye);
print uye['hobiler'][0];
?>