<?php declare(strict_types=1);

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace BK2K\BootstrapPackage\DataProcessing;

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * File Filter Processor
 * The DataProcessor requires a prepared array with Files or FilesReferences.
 * This required array is usually generated by the FilesProcessor so it must be
 * called first.
 *
 * Please note that the output variable name of the FilesProcessor
 * must be provided to the FileFilterProcessor.
 *
 *
 * Options:
 * variableName          - Resultset to work on
 * predefinedList        - Can be 'image', 'media' or 'text', will reference the
 *                         global TYPO3 settings for that file type, for example:
 *                         ['GFX']['imagefile_ext'] or ['SYS']['mediafile_ext']
 * allowedFileExtensions - List of allowed file extensions,
 *                         if set predefinedList will be overridden
 *
 *
 * Basic Example:
 * 10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
 * 10 {
 *   references.fieldName = image
 *   folders.field = image_folder
 *   sorting.field = filelink_sorting
 *   as = files
 * }
 * 20 = BK2K\BootstrapPackage\DataProcessing\FileFilterProcessor
 * 20 {
 *   variableName = files
 *   predefinedList = image
 * }
 *
 *
 * Advanced Example:
 * 10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
 * 10 {
 *   references.fieldName = image
 * }
 * 20 = BK2K\BootstrapPackage\DataProcessing\FileFilterProcessor
 * 20 {
 *   allowedFileExtensions = jpg, jpeg, gif
 * }
 */
class FileFilterProcessor implements DataProcessorInterface
{
    /**
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(ContentObjectRenderer $cObj, array $contentObjectConfiguration, array $processorConfiguration, array $processedData)
    {
        $confVars = $GLOBALS['TYPO3_CONF_VARS'];
        $predefinedLists = [
            'image' => isset($confVars['GFX']['imagefile_ext']) ? $confVars['GFX']['imagefile_ext'] : 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'media' => isset($confVars['SYS']['mediafile_ext']) ? $confVars['SYS']['mediafile_ext'] : 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'text' => isset($confVars['SYS']['textfile_ext']) ? $confVars['SYS']['textfile_ext'] : 'txt,ts,typoscript,html,htm,css,tmpl,js,sql,xml,csv,xlf,yaml,yml',
        ];
        $predefinedList = (string) $cObj->stdWrapValue('predefinedList', $processorConfiguration, 'image');
        $allowedFileExtensions = isset($predefinedLists[$predefinedList]) ? $predefinedLists[$predefinedList] : '';
        $allowedFileExtensions = GeneralUtility::trimExplode(',', (string) $cObj->stdWrapValue('allowedFileExtensions', $processorConfiguration, $allowedFileExtensions));
        if (count($allowedFileExtensions) === 0) {
            return $processedData;
        }

        $variableName = (string) $cObj->stdWrapValue('variableName', $processorConfiguration, 'files');
        if (!isset($processedData[$variableName]) || count($processedData[$variableName]) === 0) {
            return $processedData;
        }

        foreach ($processedData[$variableName] as $key => $value) {
            if (is_object($value)
                && ($value instanceof FileReference || $value instanceof File)
                && !in_array($value->getExtension(), $allowedFileExtensions, true)
            ) {
                unset($processedData[$variableName][$key]);
            }
        }

        return $processedData;
    }
}
