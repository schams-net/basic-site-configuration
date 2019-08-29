<?php

/*
 * TYPO3 Extension "Basic Site Configuration"
 *
 * Author: Michael Schams <schams.net>
 * https://schams.net
 */

defined('TYPO3_MODE') or die();

// Register autoloading for TypoScript
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Core/TypoScript/TemplateService']['runThroughTemplatesPostProcessing'][] =
    \SchamsNet\BasicSiteConfiguration\Hooks\TypoScriptHook::class . '->addTypoScriptTemplates';

// Register autoloading of pageTSconfig
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
    \TYPO3\CMS\Backend\Utility\BackendUtility::class,
    'getPagesTSconfigPreInclude',
    SchamsNet\BasicSiteConfiguration\Hooks\PageTsConfigHook::class,
    'addPageTsConfig'
);
