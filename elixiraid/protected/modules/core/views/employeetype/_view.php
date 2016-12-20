<?php
/* @var $this EmployeetypeController */
/* @var $data Employeetype */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeetypeid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employeetypeid), array('view', 'id'=>$data->employeetypeid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeetypename')); ?>:</b>
	<?php echo CHtml::encode($data->employeetypename); ?>
	<br />


</div>