<?php
/* @var $this BuildingfloorController */
/* @var $model Buildingfloor */

$this->breadcrumbs=array(
	'Buildingfloors'=>array('index'),
	$model->buildingfloorid,
);

$this->menu=array(
	array('label'=>'List Buildingfloor', 'url'=>array('index')),
	array('label'=>'Create Buildingfloor', 'url'=>array('create')),
	array('label'=>'Update Buildingfloor', 'url'=>array('update', 'id'=>$model->buildingfloorid)),
	array('label'=>'Delete Buildingfloor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->buildingfloorid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buildingfloor', 'url'=>array('admin')),
);
?>

<h1>View Buildingfloor #<?php echo $model->buildingfloorid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'buildingfloorid',
		'hospitalregistrationid',
		'hospitallocationid',
		'floorccode',
		'floorname',
	),
)); ?>
