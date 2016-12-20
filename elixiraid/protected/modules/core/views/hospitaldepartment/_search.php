<?php
/* @var $this HospitaldepartmentController */
/* @var $model Hospitaldepartment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'hospitaldepartmentid'); ?>
		<?php echo $form->textField($model,'hospitaldepartmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalregistrationid'); ?>
		<?php echo $form->textField($model,'hospitalregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buildingfloorid'); ?>
		<?php echo $form->textField($model,'buildingfloorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departmentname'); ?>
		<?php echo $form->textField($model,'departmentname',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'headname'); ?>
		<?php echo $form->textField($model,'headname',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'headaddress'); ?>
		<?php echo $form->textField($model,'headaddress',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactnumber'); ?>
		<?php echo $form->textField($model,'contactnumber'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->