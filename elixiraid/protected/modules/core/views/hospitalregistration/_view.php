<?php
/* @var $this HospitalregistrationController */
/* @var $data Hospitalregistration */
?>

<div >

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hospitalregistrationid), array('view', 'id'=>$data->hospitalregistrationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalname')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearofestablishment')); ?>:</b>
	<?php echo CHtml::encode($data->yearofestablishment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noofbuildings')); ?>:</b>
	<?php echo CHtml::encode($data->noofbuildings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactperson')); ?>:</b>
	<?php echo CHtml::encode($data->contactperson); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promotedby')); ?>:</b>
	<?php echo CHtml::encode($data->promotedby); ?>
	<br />

	

</div>