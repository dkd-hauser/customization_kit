<?php
class partial_Content_Filter_5f1a127164767d5ffc0f82d71166b935f6bad7ed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    <div class="form-row">

        <div class="form-group">
            <label for="belog-users" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'users',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'userOrGroup',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-users',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('userGroups'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        </div>

        <div class="form-group">
            <label for="belog-max" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'key' => 'max',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'number',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-max',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('selectableNumberOfLogEntries'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showWorkspaceSelector'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
            <div class="form-group">
                <label for="belog-workspaces" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'key' => 'workspace',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output15 .= '</label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'workspaceUid',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-workspaces',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('workspaces'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '
            </div>
        ';
return $output15;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output3 .= '

        <div class="form-group">
            <label for="belog-pageId" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'key' => 'chLog_menuPageId',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output3 .= '</label>
            <div class="input-group">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('pageId'),
'property' => 'pageId',
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control',
'dir' => NULL,
'id' => 'belog-pageId',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'number',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output3 .= '
                <button
                    class="btn btn-default t3js-element-browser"
                    data-target="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'route' => 'wizard_element_browser',
'parameters' => [],
'referenceType' => 'absolute',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output3 .= '"
                    data-trigger-for="belog-pageId"
                    data-mode="db"
                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.browse_db',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output3 .= '"
                >
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'identifier' => 'actions-insert-record',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
                </button>
            </div>
        </div>

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
            <div class="form-group">
                <label for="belog-depth" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'key' => 'chLog_menuDepth',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '</label>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'depth',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-depth',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('pageDepths'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '
            </div>
        ';
return $output33;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output3 .= '

        <div class="form-group">
            <label for="belog-channel" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'channel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'key' => 'all',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments40 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('channel'),
'property' => 'channel',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-channel',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('channels'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext),
'prependOptionValue' => '',
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output3 .= '
        </div>

        <div class="form-group">
            <label for="belog-level" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'key' => 'levels',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'all',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments46 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('level'),
'property' => 'level',
'class' => 'form-select',
'dir' => NULL,
'id' => 'belog-level',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('levels'),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext),
'prependOptionValue' => '',
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output3 .= '
        </div>

        <div class="form-group">
            <label for="manualDateStart" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:from',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output3 .= '</label>
            <div class="input-group">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$array54 = [
'autocomplete' => 'off',
];

$array55 = [
'date-type' => 'datetime',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'date' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart'),
'format' => $renderingContext->getVariableProvider()->getByPath('settings.dateTimeFormat'),
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure58 = ($arguments57['date'] !== null) ? function() use ($arguments57) { return $arguments57['date']; } : $renderChildrenClosure58;
$array59 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart'),
];

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments56 = [
'then' => TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext),
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
];

$arguments52 = [
'additionalAttributes' => $array54,
'data' => $array55,
'aria' => NULL,
'name' => 'manualDateStart',
'value' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, static fn() => '', $renderingContext)
,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control form-control-clearable t3js-datetimepicker t3js-clearable',
'dir' => NULL,
'id' => 'manualDateStart',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'date' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart'),
'format' => 'c',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure65 = ($arguments64['date'] !== null) ? function() use ($arguments64) { return $arguments64['date']; } : $renderChildrenClosure65;
$array66 = [
'0' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart'),
];

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments63 = [
'then' => TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext),
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
];

$arguments61 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, static fn() => '', $renderingContext)
,
'property' => 'manualDateStart',
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output3 .= '
                <label class="btn btn-default" for="manualDateStart">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'identifier' => 'actions-calendar',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output3 .= '
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="manualDateStop" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:to',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output3 .= '</label>
            <div class="input-group">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$array74 = [
'autocomplete' => 'off',
];

$array75 = [
'date-type' => 'datetime',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'date' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop'),
'format' => $renderingContext->getVariableProvider()->getByPath('settings.dateTimeFormat'),
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure77 = ($arguments76['date'] !== null) ? function() use ($arguments76) { return $arguments76['date']; } : $renderChildrenClosure77;
$arguments72 = [
'additionalAttributes' => $array74,
'data' => $array75,
'aria' => NULL,
'name' => 'manualDateStop',
'value' => TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext),
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control form-control-clearable t3js-datetimepicker t3js-clearable',
'dir' => NULL,
'id' => 'manualDateStop',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output3 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};

$arguments80 = [
'date' => $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop'),
'format' => 'c',
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure81 = ($arguments80['date'] !== null) ? function() use ($arguments80) { return $arguments80['date']; } : $renderChildrenClosure81;
$arguments78 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext),
'property' => 'manualDateStop',
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output3 .= '
                <label class="btn btn-default" for="manualDateStop">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};

$arguments82 = [
'identifier' => 'actions-calendar',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output3 .= '
                </label>
            </div>
        </div>

        <div class="form-group align-self-end">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};

$arguments86 = [
'key' => 'set',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);
};

$arguments84 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'operation',
'value' => 'filter',
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return NULL;
};

$arguments90 = [
'key' => 'reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);
};

$arguments88 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'operation',
'value' => 'reset-filters',
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-link',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output3 .= '
        </div>
    </div>
';
return $output3;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'action' => 'list',
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => $renderingContext->getVariableProvider()->getByPath('constraint'),
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'requestToken' => NULL,
'signingType' => NULL,
'enctype' => NULL,
'method' => 'post',
'name' => 'constraint',
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => NULL,
'class' => 'belog-filter-form',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#