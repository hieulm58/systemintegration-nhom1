<?php
/* @var $this EmployeetypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employeetypes',
);

$this->menu=array(
	array('label'=>'Create Employeetype', 'url'=>array('create')),
	array('label'=>'Manage Employeetype', 'url'=>array('admin')),
);
?>

<h1>Employeetypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
