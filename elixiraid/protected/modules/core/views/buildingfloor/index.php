<?php
/* @var $this BuildingfloorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buildingfloors',
);

$this->menu=array(
	array('label'=>'Create Buildingfloor', 'url'=>array('create')),
	array('label'=>'Manage Buildingfloor', 'url'=>array('admin')),
);
?>

<h1>Buildingfloors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
