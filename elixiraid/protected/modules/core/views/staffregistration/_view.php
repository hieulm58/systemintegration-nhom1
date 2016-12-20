<?php
/* @var $this StaffregistrationController */
/* @var $data Staffregistration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffregistrationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->staffregistrationid), array('view', 'id'=>$data->staffregistrationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalregistrationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeetypeid')); ?>:</b>
	<?php echo CHtml::encode($data->employeetypeid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitaldepartmentid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitaldepartmentid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofjoining')); ?>:</b>
	<?php echo CHtml::encode($data->dateofjoining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofretiremnent')); ?>:</b>
	<?php echo CHtml::encode($data->dateofretiremnent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refereceperson')); ?>:</b>
	<?php echo CHtml::encode($data->refereceperson); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencecontact')); ?>:</b>
	<?php echo CHtml::encode($data->referencecontact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualification')); ?>:</b>
	<?php echo CHtml::encode($data->qualification); ?>
	<br />

	*/ ?>

</div>