<?php
/* @var $this DoctordetailsController */
/* @var $data Doctordetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctordetailsid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->doctordetailsid), array('view', 'id'=>$data->doctordetailsid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalregistrationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctordesignationid')); ?>:</b>
	<?php echo CHtml::encode($data->doctordesignationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorspecializationid')); ?>:</b>
	<?php echo CHtml::encode($data->doctorspecializationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drshift')); ?>:</b>
	<?php echo CHtml::encode($data->drshift); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorcode')); ?>:</b>
	<?php echo CHtml::encode($data->doctorcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorname')); ?>:</b>
	<?php echo CHtml::encode($data->doctorname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactno')); ?>:</b>
	<?php echo CHtml::encode($data->contactno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultantfee')); ?>:</b>
	<?php echo CHtml::encode($data->consultantfee); ?>
	<br />

	*/ ?>

</div>