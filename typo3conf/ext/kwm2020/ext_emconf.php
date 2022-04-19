<?php

/**
 * Extension Manager/Repository config file for ext "kwm2020".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KWM 2020',
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
            'FhHagenberg\\Kwm2020\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Elmar Putz',
    'author_email' => 'elmar.putz@fh-hagenberg.at',
    'author_company' => 'FH Hagenberg',
    'version' => '1.0.0',
];
