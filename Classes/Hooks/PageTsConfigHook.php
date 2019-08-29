<?php
namespace SchamsNet\BasicSiteConfiguration\Hooks;

/*
 * TYPO3 Extension "Basic Site Configuration"
 *
 * Author: Michael Schams <schams.net>
 * https://schams.net
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 *
 */
class PageTsConfigHook
{
    /**
     * Extension key
     *
     * @access protected
     * @var string
     */
    protected $extensionKey = 'basic_site_configuration';

    /**
     * Adds Page TSconfig file
     *
     * @param array $TSdataArray
     * @param int $id
     * @param array $rootLine
     * @param array $returnPartArray
     * @return array
     */
    public function addPageTsConfig($TSdataArray, $id, $rootLine, $returnPartArray): array
    {
        // Read Page TSconfig file
        $path = ExtensionManagementUtility::extPath($this->extensionKey);
        $tsConfigFile = $path . 'Configuration/PageTs/main.tsconfig';
        if (file_exists($tsConfigFile)) {
            $TSdataArray['uid_' . $id] .= LF . (string)@file_get_contents($tsConfigFile);
        }
        return [$TSdataArray, $id, $rootLine, $returnPartArray];
    }
}
