<?php
return array (
  'customization' => 
  array (
    'rootPageId' => 1,
    'base' => 'https://admin.siva-creative.de/',
    'baseVariants' => 
    array (
      0 => 
      array (
        'base' => 'https://customization-kit.ddev.site/',
        'condition' => 'applicationContext == "Development/DDEV"',
      ),
    ),
    'errorHandling' => 
    array (
      0 => 
      array (
        'errorCode' => 404,
        'errorHandler' => 'Page',
        'errorContentSource' => 't3://page?uid=5',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/en/',
        'typo3Language' => 'default',
        'locale' => 'en_US.UTF-8',
        'iso-639-1' => 'en',
        'navigationTitle' => 'English',
        'hreflang' => 'en-US',
        'direction' => '',
        'flag' => 'en-us-gb',
        'websiteTitle' => '',
      ),
      1 => 
      array (
        'title' => 'German',
        'enabled' => true,
        'languageId' => 1,
        'base' => '/de/',
        'typo3Language' => 'de',
        'locale' => 'de_DE.UTF-8',
        'iso-639-1' => 'de',
        'navigationTitle' => 'Deutsch',
        'hreflang' => 'de-DE',
        'direction' => '',
        'fallbackType' => 'fallback',
        'fallbacks' => '1,0',
        'flag' => 'de',
      ),
    ),
    'websiteTitle' => 'TYPO3 Customization Kit',
  ),
);
#