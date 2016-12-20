<?php
/* @var $this HospitallocationController */
/* @var $model Hospitallocation */

$this->breadcrumbs=array(
	'Hospitallocations'=>array('index'),
	$model->hospitallocationid,
);

$this->menu=array(
	array('label'=>'List Hospitallocation', 'url'=>array('index')),
	array('label'=>'Create Hospitallocation', 'url'=>array('create')),
	array('label'=>'Update Hospitallocation', 'url'=>array('update', 'id'=>$model->hospitallocationid)),
	array('label'=>'Delete Hospitallocation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->hospitallocationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hospitallocation', 'url'=>array('admin')),
);
?>

<h1>View Hospitallocation #<?php echo $model->hospitallocationid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hospitallocationid',
		'hospitalregistrationid',
		'buidingname',
		'buildingcode',
	),
)); ?>
