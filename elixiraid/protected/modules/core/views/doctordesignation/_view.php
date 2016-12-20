<?php
/* @var $this DoctordesignationController */
/* @var $data Doctordesignation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctordesignationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doctordesignationid), array('view', 'id'=>$data->doctordesignationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php echo CHtml::encode($data->designation); ?>
	<br />


</div>