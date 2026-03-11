<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] Bricker TYPO3 Template ',
    'description' => 'A TYPO3 extension that adds customizable brick-based content elements and layouts.',
    'category' => 'templates',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => false,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.99.99',
            'content_blocks' => '1.0.0-1.3.18',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
