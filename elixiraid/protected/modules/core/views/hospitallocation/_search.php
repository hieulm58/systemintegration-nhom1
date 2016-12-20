<?php
/* @var $this HospitallocationController */
/* @var $model Hospitallocation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'hospitallocationid'); ?>
		<?php echo $form->textField($model,'hospitallocationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalregistrationid'); ?>
		<?php echo $form->textField($model,'hospitalregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buidingname'); ?>
		<?php echo $form->textField($model,'buidingname',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buildingcode'); ?>
		<?php echo $form->textField($model,'buildingcode',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->