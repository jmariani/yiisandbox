<?php

/**
 * TbBox widget class
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * @copyright Copyright &copy; Clevertech 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package YiiBooster bootstrap.widgets
 */
class EInnerFade extends CWidget {

    public $element;
    public $animationType = 'fade'; // or 'slide'
    public $speed = 'normal'; // or 'slow', 'fast'
    public $timeout = 2000;
    public $type = 'sequence'; // or 'random', 'random_start'
    public $containerHeight = 'auto';
    public $runningClass = 'innerfade';

    /**
     * Box title
     * If set to false, a box with no title is rendered
     * @var mixed
     */
    public $title = '';

    /**
     * The class icon to display in the header title of the box.
     * @see http://twitter.github.com/bootstrap/base-css.html#icon
     * @var string
     */
    public $headerIcon;

    /**
     * Box Content
     * optional, the content of this attribute is echoed as the box content
     * @var string
     */
    public $content = '';

    /**
     * box HTML additional attributes
     * @var array
     */
    public $htmlOptions = array();

    /**
     * box header HTML additional attributes
     * @var array
     */
    public $htmlHeaderOptions = array();

    /**
     * box content HTML additional attributes
     * @var array
     */
    public $htmlContentOptions = array();

    /**
     * @var array the configuration for additional header actions. Each array element specifies a single menu item
     * which has the following format:
     * <pre>
     *     array(
     *     'label'=>'...',     // text label of the menu
     *     'url'=>'...',       // link of the menu item
     *     'icon'=>'...',  // icon of the menu item. If set will be prepended to the label.
     *     'linkOptions'=>array(...), // HTML options for the menu item link tag
     * )
     * </pre>
     */
    public $headerActions = array();

    /**
     * @var string $headerButtonActionsLabel sets the label of the button with dropdown actions
     */
    public $headerButtonActionsLabel = 'Actions';

    /**
     * Widget initialization
     */
    public function init() {
        $this->registerClientScript();
    }

    /**
     * Widget run - used for closing procedures
     */
    public function run() {
        $_options = array();
        $_options['animationtype'] = $this->animationType;
        $_options['speed'] = $this->speed;
        $_options['timeout'] = $this->timeout;
        $_options['type'] = $this->type;
        $_options['containerheight'] = $this->containerHeight;

        $options = CJavaScript::encode($_options);

        $js = "jQuery('#{$this->element}').innerfade($options);";

        $cs = Yii::app()->getClientScript();
        $cs->registerScript(__CLASS__.'#'.$this->element, $js);
    }


    /**
     * Registers required script files (CSS in this case)
     */
    public function registerClientScript() {

//        $_cssFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'jquery.innerfade/css/jq_fade.css';
//        $cssFile = Yii::app()->getAssetManager()->publish($_cssFile);
//        Yii::app()->getClientScript()->registerCssFile($cssFile);

        $_jsFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'jquery.innerfade/js/jquery.innerfade.js';
        $jsFile = Yii::app()->getAssetManager()->publish($_jsFile);

        Yii::app()->getClientScript()->registerScriptFile($jsFile);
    }
}