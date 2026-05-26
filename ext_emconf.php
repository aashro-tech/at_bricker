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
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.3.0-14.99.99',
            'content_blocks' => '2.0.0-2.3.5',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];