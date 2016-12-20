<?php
/* @var $this DoctorspecializationController */
/* @var $data Doctorspecialization */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorspecializationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doctorspecializationid), array('view', 'id'=>$data->doctorspecializationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specialization')); ?>:</b>
	<?php echo CHtml::encode($data->specialization); ?>
	<br />


</div>