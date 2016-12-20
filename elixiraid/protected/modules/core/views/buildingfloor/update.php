<?php
/* @var $this BuildingfloorController */
/* @var $model Buildingfloor */

$this->breadcrumbs=array(
	'Buildingfloors'=>array('index'),
	$model->buildingfloorid=>array('view','id'=>$model->buildingfloorid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Buildingfloor', 'url'=>array('index')),
	array('label'=>'Create Buildingfloor', 'url'=>array('create')),
	array('label'=>'View Buildingfloor', 'url'=>array('view', 'id'=>$model->buildingfloorid)),
	array('label'=>'Manage Buildingfloor', 'url'=>array('admin')),
);
?>

<!--<h1>Update Buildingfloor <?php // echo $model->buildingfloorid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>