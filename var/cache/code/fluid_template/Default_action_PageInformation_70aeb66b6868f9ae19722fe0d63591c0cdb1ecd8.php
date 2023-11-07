<?php
class Default_action_PageInformation_70aeb66b6868f9ae19722fe0d63591c0cdb1ecd8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * section Before
 */
public function section_74f39697ac328c6325ce068b6aaca626abc0bf63(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/element/immediate-action-element.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'includeJavaScriptModules' => $array3,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => $renderingContext->getVariableProvider()->getByPath('accessContent'),
];

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression6(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('id'),
];

$arguments8 = [
'value' => $array10,
'name' => 'args',
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '
        <typo3-immediate-action
            action="TYPO3.Backend.Storage.ModuleStateStorage.update"
            args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};

$arguments14 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};

$arguments11 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output7 .= !is_string($value13) && !(is_object($value13) && method_exists($value13, '__toString')) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments11['encoding'], $arguments11['doubleEncode']);

$output7 .= '"
        ></typo3-immediate-action>
    ';
return $output7;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output16 = '';

$output16 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('accessContent'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments17 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
            <h1>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:page_title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
            </h1>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('content'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments23 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '

                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments27 = [
'route' => 'web_info_overview',
'parameters' => $array29,
'referenceType' => 'absolute',
];

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="depth">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:moduleFunctions.depth',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output26 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$array34 = [
'name' => 'depth',
'id' => 'depth',
'options' => $renderingContext->getVariableProvider()->getByPath('depthDropdownOptions'),
'currentValue' => $renderingContext->getVariableProvider()->getByPath('depthDropdownCurrentValue'),
];

$arguments32 = [
'section' => NULL,
'partial' => 'DropdownMenu',
'delegate' => NULL,
'arguments' => $array34,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output26 .= '
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pages">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:moduleFunctions.type',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output26 .= '
                            </label>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'name' => 'pages',
'id' => 'pages',
'options' => $renderingContext->getVariableProvider()->getByPath('pagesDropdownOptions'),
'currentValue' => $renderingContext->getVariableProvider()->getByPath('pagesDropdownCurrentValue'),
];

$arguments37 = [
'section' => NULL,
'partial' => 'DropdownMenu',
'delegate' => NULL,
'arguments' => $array39,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output26 .= '
                        </div>
                    </div>
                </form>

                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments40 = [
'value' => NULL,
];

$output26 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output26 .= '
            ';
return $output26;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output20 .= '
        ';
return $output20;
},
'__else' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf:message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '</p>
            ';
return $output47;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf:title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments43 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext),
'state' => 2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure44 = ($arguments43['message'] !== null) ? function() use ($arguments43) { return $arguments43['message']; } : $renderChildrenClosure44;
$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
        ';
return $output42;
},
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output16 .= '

';

    return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output50 = '';

$output50 .= '

';

$output50 .= '';

$output50 .= '

';

$output50 .= '';

$output50 .= '

';

$output50 .= '';

$output50 .= '


';

    return $output50;
}

}

#