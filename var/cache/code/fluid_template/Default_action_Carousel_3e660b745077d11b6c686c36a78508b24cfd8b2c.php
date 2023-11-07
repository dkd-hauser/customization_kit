<?php
class Default_action_Carousel_3e660b745077d11b6c686c36a78508b24cfd8b2c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('records'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
        <div id="carousel-';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output4 .= '" class="carousel carousel-';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.transition')]);

$output4 .= ' slide" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output6 = '';

$output6 .= 'data-bs-interval="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval')]);

$output6 .= '"';

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.interval'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments5 = [
'then' => $output6,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output4 .= ' data-bs-wrap="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.pi_flexform.wrap'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'then' => 'true',
'else' => 'false',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, static fn() => '', $renderingContext)
;

$output4 .= '" data-bs-ride="carousel">
            <div class="carousel-inner">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return 'item';
};

$arguments15 = [
'value' => NULL,
'name' => 'itemClass',
];
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iteration.isFirst'),
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= $renderingContext->getVariableProvider()->getByPath('itemClass');

$output22 .= ' active';
return $output22;
};

$arguments20 = [
'value' => NULL,
'name' => 'itemClass',
];
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= $renderingContext->getVariableProvider()->getByPath('itemClass');

$output25 .= ' carousel-item';
return $output25;
};

$arguments23 = [
'value' => NULL,
'name' => 'itemClass',
];
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= $renderingContext->getVariableProvider()->getByPath('itemClass');

$output28 .= ' carousel-item-layout-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.layout'),
];

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'then' => $renderingContext->getVariableProvider()->getByPath('item.data.layout'),
'else' => 'custom',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
;
return $output28;
};

$arguments26 = [
'value' => NULL,
'name' => 'itemClass',
];
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= $renderingContext->getVariableProvider()->getByPath('itemClass');

$output34 .= ' carousel-item-type-';

$output34 .= $renderingContext->getVariableProvider()->getByPath('item.data.item_type');
return $output34;
};

$arguments32 = [
'value' => NULL,
'name' => 'itemClass',
];
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'value' => NULL,
'name' => 'itemStyle',
];
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.layout'),
'1' => ' == \'custom\'',
];

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'custom');};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_color'),
];

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments41 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
$output46 = '';

$output46 .= $renderingContext->getVariableProvider()->getByPath('itemStyle');

$output46 .= ' --carousel-item-background: ';

$output46 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_color');

$output46 .= ';';
return $output46;
};

$arguments44 = [
'value' => NULL,
'name' => 'itemStyle',
];
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);
},
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, static fn() => '', $renderingContext)
;

$output40 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.text_color'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments47 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= $renderingContext->getVariableProvider()->getByPath('itemStyle');

$output52 .= ' --carousel-item-color: ';

$output52 .= $renderingContext->getVariableProvider()->getByPath('item.data.text_color');

$output52 .= ';';
return $output52;
};

$arguments50 = [
'value' => NULL,
'name' => 'itemStyle',
];
$renderChildrenClosure51 = ($arguments50['value'] !== null) ? function() use ($arguments50) { return $arguments50['value']; } : $renderChildrenClosure51;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);
},
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;

$output40 .= '
                    ';
return $output40;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output14 .= '
                    <div class="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemClass')]);

$output14 .= '" data-itemno="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.index')]);

$output14 .= '" style="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('itemStyle')]);

$output14 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'section' => NULL,
'partial' => 'Carousel/General/BackgroundImage',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output14 .= '
                        <div class="carousel-content">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};
$output57 = '';

$output57 .= 'Carousel/Item/';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.data.item_type');
};

$arguments58 = [
];

$output57 .= BK2K\BootstrapPackage\ViewHelpers\Format\UpperCamelCaseViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$arguments55 = [
'section' => NULL,
'partial' => $output57,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output14 .= '
                        </div>
                    </div>
                ';
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('records'),
'as' => 'item',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output4 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'section' => NULL,
'partial' => 'Carousel/Control/Indicator',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output4 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};

$arguments62 = [
'section' => NULL,
'partial' => 'Carousel/Control/Control',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output4 .= '
        </div>
    ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output64 = '';

$output64 .= '
';

$output64 .= '';

$output64 .= '
';

$output64 .= '';

$output64 .= '

';

    return $output64;
}

}

#