<?php
/* @var $this EmployeetypeController */
/* @var $model Employeetype */

$this->breadcrumbs=array(
	'Employeetypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Employeetype', 'url'=>array('index')),
	array('label'=>'Manage Employeetype', 'url'=>array('admin')),
);
?>

<!--<h1>Create Employeetype</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>