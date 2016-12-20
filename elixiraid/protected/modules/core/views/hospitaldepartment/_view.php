<?php
/* @var $this HospitaldepartmentController */
/* @var $data Hospitaldepartment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitaldepartmentid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hospitaldepartmentid), array('view', 'id'=>$data->hospitaldepartmentid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalregistrationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buildingfloorid')); ?>:</b>
	<?php echo CHtml::encode($data->buildingfloorid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentname')); ?>:</b>
	<?php echo CHtml::encode($data->departmentname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('headname')); ?>:</b>
	<?php echo CHtml::encode($data->headname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('headaddress')); ?>:</b>
	<?php echo CHtml::encode($data->headaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactnumber')); ?>:</b>
	<?php echo CHtml::encode($data->contactnumber); ?>
	<br />


</div>