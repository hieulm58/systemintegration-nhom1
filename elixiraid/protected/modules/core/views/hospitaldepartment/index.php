<?php
/* @var $this HospitaldepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hospitaldepartments',
);

$this->menu=array(
	array('label'=>'Create Hospitaldepartment', 'url'=>array('create')),
	array('label'=>'Manage Hospitaldepartment', 'url'=>array('admin')),
);
?>

<h1>Hospitaldepartments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
