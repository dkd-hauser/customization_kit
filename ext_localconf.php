<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['customization_kit'] = 'EXT:customization_kit/Configuration/RTE/Default.yaml';


GeneralUtility::makeInstance(
    IconRegistry::class
)->registerIcon(
    'tx-dkd-customization-kit-version',
    SvgIconProvider::class,
    ['source' => 'EXT:customization_kit/Resources/Public/Icons/Version.svg']
);



/***************
 * PageTS
 */
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:customization_kit/Configuration/TsConfig/Page/All.tsconfig">');
