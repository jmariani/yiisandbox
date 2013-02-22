<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="page-header">
	<h1>Recaptcha <small>demo</small></h1>
</div>
<div class="row-fluid">

    <div class="span6 offset3">
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Recaptcha demo",
	));
?>
<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>

    <div class="form">
    <?php $form=$this->beginWidget('CActiveForm'
//            ,array(
//            'id'=>'login-form',
//            'enableClientValidation'=>true,
//            'clientOptions'=>array(
//                'validateOnSubmit'=>true,
//            ),)
        ); ?>
	<?php echo $form->errorSummary($model); ?>

        <?php
        $this->widget('application.extensions.recaptcha.EReCaptcha',
        array('model'=>$model, 'attribute'=>'validacion',
                'theme'=>'red', 'language'=> yii::app()->getLanguage(),
                'publicKey'=>'6LeSJ9ESAAAAAC9XmTk28mJphYPulXDCIUjQ1C0g'));
        ?>
        <div class="row buttons">
            <?php // echo CHtml::submitButton('Login',array('class'=>'btn btn btn-primary')); ?>
        </div>

    <?php $this->endWidget(); ?>
    </div><!-- form -->

<?php $this->endWidget();?>

    </div>

</div>