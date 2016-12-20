<?php
/* @var $this StaffregistrationController */
/* @var $model Staffregistration */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'staffregistrationid'); ?>
		<?php echo $form->textField($model,'staffregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalregistrationid'); ?>
		<?php echo $form->textField($model,'hospitalregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employeetypeid'); ?>
		<?php echo $form->textField($model,'employeetypeid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitaldepartmentid'); ?>
		<?php echo $form->textField($model,'hospitaldepartmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofjoining'); ?>
		<?php echo $form->textField($model,'dateofjoining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofretiremnent'); ?>
		<?php echo $form->textField($model,'dateofretiremnent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refereceperson'); ?>
		<?php echo $form->textField($model,'refereceperson',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referencecontact'); ?>
		<?php echo $form->textField($model,'referencecontact'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualification'); ?>
		<?php echo $form->textField($model,'qualification',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->