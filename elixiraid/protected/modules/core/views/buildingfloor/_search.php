<?php
/* @var $this BuildingfloorController */
/* @var $model Buildingfloor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'buildingfloorid'); ?>
		<?php echo $form->textField($model,'buildingfloorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalregistrationid'); ?>
		<?php echo $form->textField($model,'hospitalregistrationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitallocationid'); ?>
		<?php echo $form->textField($model,'hospitallocationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floorccode'); ?>
		<?php echo $form->textField($model,'floorccode',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floorname'); ?>
		<?php echo $form->textField($model,'floorname',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->