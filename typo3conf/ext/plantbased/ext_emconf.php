<?php

/**
 * Extension Manager/Repository config file for ext "plantbased".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'plantbased',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Plantbased\\Plantbased\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christina Wanke',
    'author_email' => 's1910456034@students.fh-hagenberg.at',
    'author_company' => 'PlantBased',
    'version' => '1.0.0',
];
