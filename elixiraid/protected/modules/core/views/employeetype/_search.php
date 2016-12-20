<?php
/* @var $this EmployeetypeController */
/* @var $model Employeetype */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'employeetypeid'); ?>
		<?php echo $form->textField($model,'employeetypeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employeetypename'); ?>
		<?php echo $form->textField($model,'employeetypename',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->