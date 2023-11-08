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
        
        $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'] = array_merge(
            isset($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'])
                ? $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']
                : [],
            [
                'charset' => 'utf8mb4',
                'dbname' => 'admin_11',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => '50WuDibBVWXr0Qc',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ]
        );
        break;
}


