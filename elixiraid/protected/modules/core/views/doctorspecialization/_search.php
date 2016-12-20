<?php
/* @var $this DoctorspecializationController */
/* @var $model Doctorspecialization */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'doctorspecializationid'); ?>
		<?php echo $form->textField($model,'doctorspecializationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'specialization'); ?>
		<?php echo $form->textField($model,'specialization',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->