<?php
/* @var $this HospitallocationController */
/* @var $data Hospitallocation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitallocationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hospitallocationid), array('view', 'id'=>$data->hospitallocationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalregistrationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buidingname')); ?>:</b>
	<?php echo CHtml::encode($data->buidingname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buildingcode')); ?>:</b>
	<?php echo CHtml::encode($data->buildingcode); ?>
	<br />


</div>