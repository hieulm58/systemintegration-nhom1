<?php
/* @var $this DoctordetailsController */
/* @var $model Doctordetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'doctordetailsid'); ?>
		<?php echo $form->textField($model,'doctordetailsid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalregistrationid'); ?>
		<?php echo $form->textField($model,'hospitalregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctordesignationid'); ?>
		<?php echo $form->textField($model,'doctordesignationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctorspecializationid'); ?>
		<?php echo $form->textField($model,'doctorspecializationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drshiftid'); ?>
		<?php echo $form->textField($model,'drshiftid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctorcode'); ?>
		<?php echo $form->textField($model,'doctorcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctorname'); ?>
		<?php echo $form->textField($model,'doctorname',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactno'); ?>
		<?php echo $form->textField($model,'contactno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consultantfee'); ?>
		<?php echo $form->textField($model,'consultantfee'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->