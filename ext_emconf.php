<?php

/**
 * Extension Manager/Repository config file for ext "cammirata12".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'cammirata12',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Cammirata12\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo Frank',
    'author_email' => 'efrank@eduardofrank.co',
    'author_company' => 'Eduardo Frank',
    'version' => '1.0.0',
];
