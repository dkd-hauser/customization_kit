<?php

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

namespace TYPO3\CMS\Filelist\LinkHandler;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\View\FolderUtilityRenderer;
use TYPO3\CMS\Core\Resource\ResourceInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Filelist\Matcher\Matcher;
use TYPO3\CMS\Filelist\Matcher\ResourceFileExtensionMatcher;
use TYPO3\CMS\Filelist\Matcher\ResourceFileTypeMatcher;
use TYPO3\CMS\Filelist\Matcher\ResourceFolderTypeMatcher;
use TYPO3\CMS\Filelist\Matcher\ResourceMatcher;
use TYPO3\CMS\Filelist\Type\LinkType;
use TYPO3\CMS\Filelist\Type\Mode;

/**
 * @internal
 */
class FileLinkHandler extends AbstractResourceLinkHandler
{
    protected LinkType $type = LinkType::FILE;

    public function initializeVariables(ServerRequestInterface $request): void
    {
        parent::initializeVariables($request);
        $this->pageRenderer->loadJavaScriptModule('@typo3/filelist/linkbrowser-file-handler.js');

        $this->resourceDisplayMatcher = GeneralUtility::makeInstance(Matcher::class);
        $this->resourceDisplayMatcher->addMatcher(GeneralUtility::makeInstance(ResourceFolderTypeMatcher::class));

        // @todo Deprecate "allowedExtensions", see LinkPopup for further information
        $allowedExtensions = GeneralUtility::trimExplode(',', (string)($this->linkBrowser->getParameters()['params']['allowedExtensions'] ?? ''), true);
        $allowedFileExtensions = GeneralUtility::trimExplode(',', (string)($this->linkBrowser->getParameters()['params']['allowedFileExtensions'] ?? ''), true);
        $allowedFileExtensions = array_unique(array_merge($allowedExtensions, $allowedFileExtensions));
        if (count($allowedFileExtensions) >= 1) {
            $fileExtensionMatcher = GeneralUtility::makeInstance(ResourceFileExtensionMatcher::class);
            $fileExtensionMatcher->setExtensions($allowedFileExtensions);
        } else {
            $fileExtensionMatcher = GeneralUtility::makeInstance(ResourceFileTypeMatcher::class);
        }
        $this->resourceDisplayMatcher->addMatcher($fileExtensionMatcher);
    }

    public function render(ServerRequestInterface $request): string
    {
        $contentHtml = '';
        if ($this->selectedFolder !== null) {
            $markup = [];

            // Create the filelist header bar
            $markup[] = '<div class="row justify-content-between mb-2">';
            $markup[] = '    <div class="col-auto"></div>';
            $markup[] = '    <div class="col-auto">';
            $markup[] = '        ' . $this->getViewModeButton($request);
            $markup[] = '    </div>';
            $markup[] = '</div>';

            // Create the filelist
            $this->filelist->start(
                $this->selectedFolder,
                MathUtility::forceIntegerInRange($this->currentPage, 1, 100000),
                $request->getQueryParams()['sort'] ?? '',
                ($request->getQueryParams()['reverse'] ?? '') === '1',
                Mode::BROWSE
            );
            $this->filelist->setResourceDisplayMatcher($this->resourceDisplayMatcher);
            $this->filelist->setResourceSelectableMatcher($this->resourceSelectableMatcher);

            $resource = $this->linkParts['url']['file'] ?? null;
            if ($resource instanceof ResourceInterface) {
                $resourceSelectedMatcher = GeneralUtility::makeInstance(Matcher::class);
                $resourceMatcher = GeneralUtility::makeInstance(ResourceMatcher::class);
                $resourceMatcher->addResource($resource);
                $resourceSelectedMatcher->addMatcher($resourceMatcher);
                $this->filelist->setResourceSelectedMatcher($resourceSelectedMatcher);
            }

            $markup[] = $this->filelist->render(null, $this->view);

            // Build the file upload and folder creation form
            $folderUtilityRenderer = GeneralUtility::makeInstance(FolderUtilityRenderer::class, $this);
            $markup[] = $folderUtilityRenderer->uploadForm($this->selectedFolder);
            $markup[] = $folderUtilityRenderer->createFolder($this->selectedFolder);

            $contentHtml = implode(PHP_EOL, $markup);
        }

        $this->view->assign('selectedFolder', $this->selectedFolder);
        $this->view->assign('content', $contentHtml);
        $this->view->assign('contentOnly', (bool)($request->getQueryParams()['contentOnly'] ?? false));
        $this->view->assign('treeActions', ($this->type === LinkType::FOLDER) ? ['link'] : []);
        $this->view->assign('currentIdentifier', !empty($this->linkParts) ? $this->linkParts['url']['file']->getUid() : '');

        return $this->view->render('LinkHandler/File');
    }
}
