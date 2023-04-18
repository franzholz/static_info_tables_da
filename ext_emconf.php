<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (da)',
    'description' => 'Danish (da) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.9.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.3.99',
            'static_info_tables' => '6.9.0-12.3.99',
            'addons_em' => '0.6.0-0.12.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
