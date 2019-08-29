<?php

/*
 * TYPO3 Extension "Basic Site Configuration"
 *
 * Author: Michael Schams <schams.net>
 * https://schams.net
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Basic Site Configuration',
    'description' => 'Implements the basic configuration for TYPO3 sites',
    'category' => 'fe',
    'version' => '9.5.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Michael Schams',
    'author_email' => '',
    'author_company' => 'https://schams.net',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ]
    ]
];
