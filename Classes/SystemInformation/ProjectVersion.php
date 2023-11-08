<?php

namespace Dkd\CustomizationKit\SystemInformation;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Backend\Backend\Event\SystemInformationToolbarCollectorEvent;
use TYPO3\CMS\Backend\Toolbar\Enumeration\InformationStatus;
use TYPO3\CMS\Core\Core\Environment;

/**
 * Display version number at system information panel
 */
class ProjectVersion
{
    /**
     * Add information with content of file "Version" to system toolbar
     *
     * @param SystemInformationToolbarCollectorEvent $event
     */
    public function appendMessage(SystemInformationToolbarCollectorEvent $event): void
    {
        $version = $this->readVersion();
        if ($version) {
            $event->getToolbarItem()->addSystemInformation(
                'Project Version',
                $this->readVersion(),
                'tx-dkd-customization-kit-version',
                InformationStatus::STATUS_NOTICE
            );
        }
    }

    /**
     * Returns the current version.
     *
     * @return string
     */
    public function readVersion(): string
    {
        $versionFile = Environment::getPublicPath() . '/Version';
        $version = '';
        if (!file_exists($versionFile) && getenv('TYPO3_PATH_COMPOSER_ROOT')) {
            // If file not on vhost root, try file at composer root path
            $versionFile = getenv('TYPO3_PATH_COMPOSER_ROOT') . '/Version';
        }
        if (file_exists($versionFile)) {
            $version = (string)file_get_contents($versionFile);
            $version = strip_tags($version);
            $version = htmlspecialchars($version);
        } else {
            $version = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('customization_kit');
        }

        return $version;
    }

}
