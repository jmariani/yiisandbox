<?php
class ReCaptchaForm extends CFormModel
{
   public $validacion;

   public function rules()
   {
      return array(
         array('validacion',
               'application.extensions.recaptcha.EReCaptchaValidator',
               'privateKey'=>'6LeSJ9ESAAAAABs28mTOtb1-0XvM0--u05CS5w_V'),
      );
   }

   public function attributeLabels()
   {
      return array(
         'validacion'=>Yii::t('demo', 'Enter both words separated by a space: '),
      );
   }
}