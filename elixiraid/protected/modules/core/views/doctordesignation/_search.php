<?php
/* @var $this DoctordesignationController */
/* @var $model Doctordesignation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'doctordesignationid'); ?>
		<?php echo $form->textField($model,'doctordesignationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->