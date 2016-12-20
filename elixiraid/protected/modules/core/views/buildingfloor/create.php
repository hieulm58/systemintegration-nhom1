<?php
/* @var $this BuildingfloorController */
/* @var $model Buildingfloor */

$this->breadcrumbs=array(
	'Buildingfloors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buildingfloor', 'url'=>array('index')),
	array('label'=>'Manage Buildingfloor', 'url'=>array('admin')),
);
?>

<!--<h1>Create Buildingfloor</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>