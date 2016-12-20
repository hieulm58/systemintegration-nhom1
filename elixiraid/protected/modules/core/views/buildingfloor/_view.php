<?php
/* @var $this BuildingfloorController */
/* @var $data Buildingfloor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('buildingfloorid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->buildingfloorid), array('view', 'id'=>$data->buildingfloorid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalregistrationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalregistrationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitallocationid')); ?>:</b>
	<?php echo CHtml::encode($data->hospitallocationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floorccode')); ?>:</b>
	<?php echo CHtml::encode($data->floorccode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floorname')); ?>:</b>
	<?php echo CHtml::encode($data->floorname); ?>
	<br />


</div>