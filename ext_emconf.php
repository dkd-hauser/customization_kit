<?php

/**
 * Extension Manager/Repository config file for ext "customization_kit".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'customization kit',
    'description' => 'TYPO3 customization kit',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dkd\\CustomizationKit\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Hauser',
    'author_email' => 'oliver.hauser@dkd.de',
    'author_company' => 'dkd',
    'version' => '1.0.0',
];
