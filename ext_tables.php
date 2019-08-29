<?php

/*
 * TYPO3 Extension "Basic Site Configuration"
 *
 * Author: Michael Schams <schams.net>
 * https://schams.net
 */

defined('TYPO3_MODE') or die();

// disable sys_templates - could be done as an option of the extension dynamically
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod.web_list.deniedNewTables := addToList(sys_template)
    mod.web_ts.menu.function.tx_tstemplateceditor = 0
    mod.web_ts.menu.function.tx_tstemplateinfo = 0
    TCEFORM.pages.TSconfig.disabled=1
    TCEFORM.pages.tsconfig_includes.disabled=1
');
