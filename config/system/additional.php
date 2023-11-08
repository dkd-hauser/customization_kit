<?php
switch (\TYPO3\CMS\Core\Core\Environment::getContext()) {
    case 'Development/DDEV':
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'].= " DDEV";
        
        $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'] = array_merge(
            isset($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'])
                ? $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']
                : [],
            [
                'dbname' => 'db',
                'host' => 'db',
                'password' => 'db',
                'port' => '3306',
                'user' => 'db',
            ]
        );
        break;

    case 'Production':
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 0;
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'].= " Production";

        /* Include unversioned stage specific configuration file */
        require_once(
            \TYPO3\CMS\Core\Core\Environment::getProjectPath() . '/config/production/db_settings_production.php'
        );
        break;
}
