<?php
/**
 * Compiled ext_localconf.php cache file
 */

/**
 * Extension: core
 * File: /var/www/html/vendor/typo3/cms-core/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Authentication\AuthenticationService;
use TYPO3\CMS\Core\Controller\FileDumpController;
use TYPO3\CMS\Core\Controller\RequireJsController;
use TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck;
use TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck;
use TYPO3\CMS\Core\Hooks\CreateSiteConfiguration;
use TYPO3\CMS\Core\Hooks\DestroySessionHook;
use TYPO3\CMS\Core\Hooks\PagesTsConfigGuard;
use TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager;
use TYPO3\CMS\Core\MetaTag\Html5MetaTagManager;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\Index\ExtractorRegistry;
use TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor;
use TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\RendererRegistry;
use TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect;
use TYPO3\CMS\Core\Resource\Security\SvgHookHandler;
use TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor;
use TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][GeneralUtility::class]['moveUploadedFile'][] = SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserGroupIntegrityCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][CreateSiteConfiguration::class] = CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = FileDumpController::class . '::dumpAction';
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['requirejs'] = RequireJsController::class . '::retrieveConfiguration';

$rendererRegistry = GeneralUtility::makeInstance(RendererRegistry::class);
$rendererRegistry->registerRendererClass(AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = GeneralUtility::makeInstance(TextExtractorRegistry::class);
$textExtractorRegistry->registerTextExtractor(PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = GeneralUtility::makeInstance(ExtractorRegistry::class);
$extractorRegistry->registerExtractionService(Extractor::class);
unset($extractorRegistry);

// Register base authentication service
ExtensionManagementUtility::addService(
    'core',
    'auth',
    AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    ]
);

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(
    'config.pageTitleProviders.record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider'
);

// Register preset for sys_news
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sys_news'] = 'EXT:core/Configuration/RTE/SysNews.yaml';
}
}


/**
 * Extension: scheduler
 * File: /var/www/html/vendor/typo3/cms-scheduler/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\ExecuteSchedulableCommandTask;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationTask;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider;
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask;

defined('TYPO3') or die();

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CachingFrameworkGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => CachingFrameworkGarbageCollectionAdditionalFieldProvider::class,
];

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageIndexingTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => FileStorageIndexingAdditionalFieldProvider::class,
];

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][FileStorageExtractionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => FileStorageExtractionAdditionalFieldProvider::class,

];

// Add recycler directory cleanup task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][RecyclerGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
    'additionalFields' => RecyclerGarbageCollectionAdditionalFieldProvider::class,
];

// Add execute schedulable command task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][ExecuteSchedulableCommandTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:executeSchedulableCommandTask.name',
    'additionalFields' => ExecuteSchedulableCommandAdditionalFieldProvider::class,
];

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options'] ?? [];
$garbageCollectionTaskOptions['tables'] = $garbageCollectionTaskOptions['tables'] ?? [];
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions,
];
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 180,
    ];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 30,
    ];
}

// Save any previous option array for ip anonymization task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$ipAnonymizeCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options'] ?? [];
$ipAnonymizeCollectionTaskOptions['tables'] = $ipAnonymizeCollectionTaskOptions['tables'] ?? [];
// Add ip anonymization task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:ipAnonymization.description',
    'additionalFields' => IpAnonymizationAdditionalFieldProvider::class,
    'options' => $ipAnonymizeCollectionTaskOptions,
];
unset($ipAnonymizeCollectionTaskOptions);

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] ?? false)) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][IpAnonymizationTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'ipField' => 'IP',
    ];
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][OptimizeDatabaseTableTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => OptimizeDatabaseTableAdditionalFieldProvider::class,

];

// Available frequency options
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['frequencyOptions'] = [
    '0 9,15 * * 1-5' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example1',
    '0 */2 * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example2',
    '*/20 * * * *' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example3',
    '0 7 * * 2' =>  'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:command.example4',
];
}


/**
 * Extension: backend
 * File: /var/www/html/vendor/typo3/cms-backend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider;
use TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider;
use TYPO3\CMS\Backend\View\BackendLayout\PageTsBackendLayoutDataProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'iconIdentifier' => 'actions-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link',
];

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
    'provider' => DefaultAvatarProvider::class,
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Register BackendLayoutDataProvider for PageTs
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = PageTsBackendLayoutDataProvider::class;
}


/**
 * Extension: frontend
 * File: /var/www/html/vendor/typo3/cms-frontend/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Frontend\Controller\ShowImageController;
use TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks;

defined('TYPO3') or die();

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = ShowImageController::class . '::processRequest';

ExtensionManagementUtility::addUserTSConfig('
  options.saveDocView = 1
  options.saveDocNew = 1
  options.saveDocNew.pages = 0
  options.saveDocNew.sys_file = 0
  options.saveDocNew.sys_file_metadata = 0
  options.disableDelete.sys_file = 1
');

ExtensionManagementUtility::addTypoScriptSetup(
    '
# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Registering hooks for the tree list cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = TreelistCacheUpdateHooks::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';
}


/**
 * Extension: adminpanel
 * File: /var/www/html/vendor/typo3/cms-adminpanel/ext_localconf.php
 */

namespace {




use Psr\Log\LogLevel;
use TYPO3\CMS\Adminpanel\Controller\AjaxController;
use TYPO3\CMS\Adminpanel\Log\InMemoryLogWriter;
use TYPO3\CMS\Adminpanel\Modules\CacheModule;
use TYPO3\CMS\Adminpanel\Modules\Debug\Events;
use TYPO3\CMS\Adminpanel\Modules\Debug\Log;
use TYPO3\CMS\Adminpanel\Modules\Debug\PageTitle;
use TYPO3\CMS\Adminpanel\Modules\Debug\QueryInformation;
use TYPO3\CMS\Adminpanel\Modules\DebugModule;
use TYPO3\CMS\Adminpanel\Modules\Info\GeneralInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\PhpInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\RequestInformation;
use TYPO3\CMS\Adminpanel\Modules\Info\UserIntInformation;
use TYPO3\CMS\Adminpanel\Modules\InfoModule;
use TYPO3\CMS\Adminpanel\Modules\PreviewModule;
use TYPO3\CMS\Adminpanel\Modules\TsDebug\TypoScriptWaterfall;
use TYPO3\CMS\Adminpanel\Modules\TsDebugModule;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['adminpanel']['modules'] = [
    'preview' => [
        'module' => PreviewModule::class,
        'before' => ['cache'],
    ],
    'cache' => [
        'module' => CacheModule::class,
        'after' => ['preview'],
    ],
    'tsdebug' => [
        'module' => TsDebugModule::class,
        'after' => ['edit'],
        'submodules' => [
            'ts-waterfall' => [
                'module' => TypoScriptWaterfall::class,
            ],
        ],
    ],
    'info' => [
        'module' => InfoModule::class,
        'after' => ['tsdebug'],
        'submodules' => [
            'general' => [
                'module' => GeneralInformation::class,
            ],
            'request' => [
                'module' => RequestInformation::class,
            ],
            'phpinfo' => [
                'module' => PhpInformation::class,
            ],
            'userint' => [
                'module' => UserIntInformation::class,
            ],
        ],
    ],
    'debug' => [
        'module' => DebugModule::class,
        'after' => ['info'],
        'submodules' => [
            'log' => [
                'module' => Log::class,
            ],
            'queryInformation' => [
                'module' => QueryInformation::class,
            ],
            'pageTitle' => [
                'module' => PageTitle::class,
            ],
            'events' => [
                'module' => Events::class,
            ],
        ],
    ],
];

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['adminPanel_save']
    = AjaxController::class . '::saveDataAction';

// The admin panel has a module to show log messages. Register a debug logger to gather those.
$GLOBALS['TYPO3_CONF_VARS']['LOG']['writerConfiguration'][LogLevel::DEBUG][InMemoryLogWriter::class] = [];

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['adminpanel_requestcache'] = [];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['DB']['Connections']['Default']['driverMiddlewares'] = [];
}

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['driverMiddlewares']['adminpanel_loggingmiddleware'] = \TYPO3\CMS\Adminpanel\Log\DoctrineSqlLoggingMiddleware::class;
}


/**
 * Extension: dashboard
 * File: /var/www/html/vendor/typo3/cms-dashboard/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Cache\Backend\FileBackend;
use TYPO3\CMS\Core\Cache\Frontend\VariableFrontend;
use TYPO3\CMS\Dashboard\Persistence\DashboardCreationEnricher;

defined('TYPO3') or die();

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => VariableFrontend::class,
        'backend' => FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = DashboardCreationEnricher::class;
}


/**
 * Extension: form
 * File: /var/www/html/vendor/typo3/cms-form/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Form\Controller\FormFrontendController;
use TYPO3\CMS\Form\Hooks\FormElementHooks;
use TYPO3\CMS\Form\Hooks\ImportExportHook;
use TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration;

defined('TYPO3') or die();

call_user_func(static function () {
    if (ExtensionManagementUtility::isLoaded('impexp')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/impexp/class.tx_impexp.php']['before_addSysFileRecord'][1530637161]
            = ImportExportHook::class . '->beforeAddSysFileRecordOnImport';
    }

    // Add module configuration
    ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_form {
    settings {
        yamlConfigurations {
            10 = EXT:form/Configuration/Yaml/FormSetup.yaml
        }
    }
}'
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1489772699]
        = FormElementHooks::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1489772699]
        = FormElementHooks::class;

    // FE file upload processing
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1489772699]
        = PropertyMappingConfiguration::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterFormStateInitialized'][1613296803]
        = PropertyMappingConfiguration::class;

    // Register "formvh:" namespace
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['formvh'][] = 'TYPO3\\CMS\\Form\\ViewHelpers';

    // Register FE plugin
    ExtensionUtility::configurePlugin(
        'Form',
        'Formframework',
        [FormFrontendController::class => 'render, perform'],
        [FormFrontendController::class => 'perform'],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
});
}


/**
 * Extension: fluid_styled_content
 * File: /var/www/html/vendor/typo3/cms-fluid-styled-content/ext_localconf.php
 */

namespace {




defined('TYPO3') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';
}


/**
 * Extension: reports
 * File: /var/www/html/vendor/typo3/cms-reports/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Reports\Task\SystemStatusUpdateTask;
use TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][SystemStatusUpdateTask::class] = [
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => SystemStatusUpdateTaskNotificationEmailField::class,
];
}


/**
 * Extension: redirects
 * File: /var/www/html/vendor/typo3/cms-redirects/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Backend\Form\FormDataProvider\TcaInputPlaceholders;
use TYPO3\CMS\Redirects\Evaluation\SourceHost;
use TYPO3\CMS\Redirects\FormDataProvider\ValuePickerItemDataProvider;
use TYPO3\CMS\Redirects\Hooks\DataHandlerCacheFlushingHook;
use TYPO3\CMS\Redirects\Hooks\DataHandlerSlugUpdateHook;
use TYPO3\CMS\Redirects\Hooks\DispatchNotificationHook;

defined('TYPO3') or die();

// Rebuild cache in DataHandler on changing / inserting / adding redirect records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['redirects'] = DataHandlerCacheFlushingHook::class . '->rebuildRedirectCacheIfNecessary';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['redirects'] = DataHandlerSlugUpdateHook::class;

// Inject sys_domains into valuepicker form
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord']
[ValuePickerItemDataProvider::class] = [
    'depends' => [
        TcaInputPlaceholders::class,
    ],
];

// Add validation call for form field source_host and source_path
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SourceHost::class] = '';

// Register update signal to send delayed notifications
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['updateSignalHook']['redirects:slugChanged'] = DispatchNotificationHook::class . '->dispatchNotification';
}


/**
 * Extension: seo
 * File: /var/www/html/vendor/typo3/cms-seo/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Seo\Canonical\CanonicalGenerator;
use TYPO3\CMS\Seo\MetaTag\MetaTagGenerator;
use TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager;
use TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag'] =
    MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));
}


/**
 * Extension: linkvalidator
 * File: /var/www/html/vendor/typo3/cms-linkvalidator/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Linkvalidator\Task\ValidatorTask;
use TYPO3\CMS\Linkvalidator\Task\ValidatorTaskAdditionalFieldProvider;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][ValidatorTask::class] = [
    'extension' => 'linkvalidator',
    'title' => 'LLL:EXT:linkvalidator/Resources/Private/Language/locallang.xlf:tasks.validate.name',
    'description' => 'LLL:EXT:linkvalidator/Resources/Private/Language/locallang.xlf:tasks.validate.description',
    'additionalFields' => ValidatorTaskAdditionalFieldProvider::class,
];
}


/**
 * Extension: indexed_search
 * File: /var/www/html/vendor/typo3/cms-indexed-search/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\IndexedSearch\Controller\SearchController;
use TYPO3\CMS\IndexedSearch\FileContentParser;
use TYPO3\CMS\IndexedSearch\Hook\DeleteIndexedData;
use TYPO3\CMS\IndexedSearch\Utility\DoubleMetaPhoneUtility;

defined('TYPO3') or die();

// register plugin
ExtensionUtility::configurePlugin(
    'IndexedSearch',
    'Pi2',
    [SearchController::class => 'form,search,noTypoScript'],
    [SearchController::class => 'form,search']
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['indexed_search'] = DeleteIndexedData::class . '->delete';

// Configure default document parsers:
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['external_parsers'] = [
    'pdf'  => FileContentParser::class,
    'doc'  => FileContentParser::class,
    'docx' => FileContentParser::class,
    'dotx' => FileContentParser::class,
    'pps'  => FileContentParser::class,
    'ppsx' => FileContentParser::class,
    'ppt'  => FileContentParser::class,
    'pptx' => FileContentParser::class,
    'potx' => FileContentParser::class,
    'xls'  => FileContentParser::class,
    'xlsx' => FileContentParser::class,
    'xltx' => FileContentParser::class,
    'sxc'  => FileContentParser::class,
    'sxi'  => FileContentParser::class,
    'sxw'  => FileContentParser::class,
    'ods'  => FileContentParser::class,
    'odp'  => FileContentParser::class,
    'odt'  => FileContentParser::class,
    'rtf'  => FileContentParser::class,
    'txt'  => FileContentParser::class,
    'html' => FileContentParser::class,
    'htm'  => FileContentParser::class,
    'csv'  => FileContentParser::class,
    'xml'  => FileContentParser::class,
    'jpg'  => FileContentParser::class,
    'jpeg' => FileContentParser::class,
    'tif'  => FileContentParser::class,
];

$extConf = GeneralUtility::makeInstance(
    ExtensionConfiguration::class
)->get('indexed_search');

if (isset($extConf['useMysqlFulltext']) && (bool)$extConf['useMysqlFulltext']) {
    // Use all index_* tables except "index_rel" and "index_words"
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['use_tables'] =
        'index_phash,index_fulltext,index_section,index_grlist,index_stat_word,index_debug,index_config';
} else {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['use_tables'] =
        'index_phash,index_fulltext,index_rel,index_words,index_section,index_grlist,index_stat_word,index_debug,index_config';
}

// Use the advanced doubleMetaphone parser instead of the internal one (usage of metaphone parsers is generally disabled by default)
if (isset($extConf['enableMetaphoneSearch']) && (int)$extConf['enableMetaphoneSearch'] == 2) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['metaphone'] = DoubleMetaPhoneUtility::class;
}
unset($extConf);
}


/**
 * Extension: reactions
 * File: /var/www/html/vendor/typo3/cms-reactions/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Reactions\Form\Element\FieldMapElement;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1660911089] = [
    'nodeName' => 'fieldMap',
    'priority' => 40,
    'class' => FieldMapElement::class,
];
}


/**
 * Extension: recycler
 * File: /var/www/html/vendor/typo3/cms-recycler/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Recycler\Task\CleanerFieldProvider;
use TYPO3\CMS\Recycler\Task\CleanerTask;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][CleanerTask::class] = [
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => CleanerFieldProvider::class,
];
}


/**
 * Extension: rte_ckeditor
 * File: /var/www/html/vendor/typo3/cms-rte-ckeditor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver;

defined('TYPO3') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => RichTextNodeResolver::class,
];

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}
}


/**
 * Extension: webhooks
 * File: /var/www/html/vendor/typo3/cms-webhooks/ext_localconf.php
 */

namespace {




defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Webhooks\Listener\PageModificationListener::class;
}


/**
 * Extension: extensionmanager
 * File: /var/www/html/vendor/typo3/cms-extensionmanager/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask;

defined('TYPO3') or die();

// Register extension list update task
if (!(bool)GeneralUtility::makeInstance(
    ExtensionConfiguration::class
)->get('extensionmanager', 'offlineMode')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}
}


/**
 * Extension: felogin
 * File: /var/www/html/vendor/typo3/cms-felogin/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\FrontendLogin\Controller\LoginController;
use TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController;

defined('TYPO3') or die();

// Add default TypoScript
ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:felogin/Configuration/TypoScript/constants.typoscript'"
);
ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:felogin/Configuration/TypoScript/setup.typoscript'"
);

ExtensionUtility::configurePlugin(
    'Felogin',
    'Login',
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    [
        LoginController::class => 'login, overview',
        PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
}


/**
 * Extension: sys_note
 * File: /var/www/html/vendor/typo3/cms-sys-note/ext_localconf.php
 */

namespace {




use TYPO3\CMS\SysNote\Persistence\NoteCreationEnricher;

defined('TYPO3') or die();

// Fill the "owner" field of a dashboard with the user who created it
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = NoteCreationEnricher::class;
}


/**
 * Extension: t3editor
 * File: /var/www/html/vendor/typo3/cms-t3editor/ext_localconf.php
 */

namespace {




use TYPO3\CMS\T3editor\Form\Element\T3editorElement;

defined('TYPO3') or die();

// Register backend FormEngine node
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => T3editorElement::class,
];
}


/**
 * Extension: tstemplate
 * File: /var/www/html/vendor/typo3/cms-tstemplate/ext_localconf.php
 */

namespace {




use TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook;

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';
}


/**
 * Extension: bootstrap_package
 * File: /var/www/html/vendor/bk2k/bootstrap-package/ext_localconf.php
 */

namespace {


/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrappackage/Configuration/TypoScript/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'bootstrappackage/Configuration/TypoScript/ContentElement/';

// Make the extension configuration accessible
$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
);

// PageTS

// Add Content Elements
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsContentElements')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/All.tsconfig">');
}

// Add BackendLayouts for the BackendLayout DataProvider
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsBackendLayouts')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">');
}

// RTE
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsRTE')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/RTE.tsconfig">');
}

// TCADefaults
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsTCADefaults')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/TCADefaults.tsconfig">');
}

// TCEMAIN
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsTCEMAIN')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/TCEMAIN.tsconfig">');
}

// TCEFORM
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disablePageTsTCEFORM')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrap_package/Configuration/TsConfig/Page/TCEFORM.tsconfig">');
}

// Register custom EXT:form configuration
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('form')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
        module.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:bootstrap_package/Configuration/Form/Setup.yaml
                }
            }
        }
        plugin.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:bootstrap_package/Configuration/Form/Setup.yaml
                }
            }
        }
    '));
}

// Register google font hook
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disableGoogleFontCaching')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][\BK2K\BootstrapPackage\Hooks\PageRenderer\GoogleFontHook::class]
        = \BK2K\BootstrapPackage\Hooks\PageRenderer\GoogleFontHook::class . '->execute';
}

// Register css processing parser
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/css']['parser'][\BK2K\BootstrapPackage\Parser\ScssParser::class] =
    \BK2K\BootstrapPackage\Parser\ScssParser::class;

// Register css processing hooks
if (!(bool) $extensionConfiguration->get('bootstrap_package', 'disableCssProcessing')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][\BK2K\BootstrapPackage\Hooks\PageRenderer\PreProcessHook::class]
        = \BK2K\BootstrapPackage\Hooks\PageRenderer\PreProcessHook::class . '->execute';
}

// Register icon provider
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\BK2K\BootstrapPackage\Icons\IoniconsProvider::class]
    = \BK2K\BootstrapPackage\Icons\IoniconsProvider::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\BK2K\BootstrapPackage\Icons\GlyphiconsProvider::class]
    = \BK2K\BootstrapPackage\Icons\GlyphiconsProvider::class;

// Add default RTE configuration for bootstrap package
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bootstrap'] = 'EXT:bootstrap_package/Configuration/RTE/Default.yaml';

// Extend TYPO3 upgrade wizards to handle bootstrap package specific upgrades
if (isset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\SectionFrameToFrameClassUpdate::class])) {
    unset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\SectionFrameToFrameClassUpdate::class]);
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\AccordionContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\AccordionContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\AccordionMediaOrientUpdate::class]
    = \BK2K\BootstrapPackage\Updates\AccordionMediaOrientUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\BackendLayoutUpdate::class]
    = \BK2K\BootstrapPackage\Updates\BackendLayoutUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\BulletContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\BulletContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\CarouselContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\CarouselContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\CarouselItemTypeUpdate::class]
    = \BK2K\BootstrapPackage\Updates\CarouselItemTypeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\CarouselItemLayoutUpdate::class]
    = \BK2K\BootstrapPackage\Updates\CarouselItemLayoutUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\ExternalMediaContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\ExternalMediaContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\FrameClassUpdate::class]
    = \BK2K\BootstrapPackage\Updates\FrameClassUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\FrameClassToBackgroundUpdate::class]
    = \BK2K\BootstrapPackage\Updates\FrameClassToBackgroundUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\FrameClassToOptionsUpdate::class]
    = \BK2K\BootstrapPackage\Updates\FrameClassToOptionsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\ListGroupContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\ListGroupContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\PanelContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\PanelContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TabContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TabContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TabMediaOrientUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TabMediaOrientUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TableContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TableContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TexticonContentElementUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TexticonContentElementUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TexticonSizeUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TexticonSizeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TexticonTypeUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TexticonTypeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\BK2K\BootstrapPackage\Updates\TexticonIconUpdate::class]
    = \BK2K\BootstrapPackage\Updates\TexticonIconUpdate::class;

// Register "bk2k" as global fluid namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['bk2k'][] = 'BK2K\\BootstrapPackage\\ViewHelpers';

// Register "icon" wizard
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1687516916] = [
    'nodeName' => 'iconWizard',
    'priority' => 40,
    'class' => \BK2K\BootstrapPackage\Form\FieldWizard\IconWizard::class
];
}


/**
 * Extension: introduction
 * File: /var/www/html/vendor/typo3/cms-introduction/ext_localconf.php
 */

namespace {


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

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  module.tx_form.settings.yamlConfigurations.100 = EXT:introduction/Configuration/Form/CustomFormSetup.yaml
  plugin.tx_form.settings.yamlConfigurations.100 = EXT:introduction/Configuration/Form/CustomFormSetup.yaml
');
}


/**
 * Extension: customization_kit
 * File: /var/www/html/ext_localconf.php
 */

namespace {


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
}


#