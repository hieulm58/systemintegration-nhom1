<?php
/* @var $this DoctordesignationController */
/* @var $model Doctordesignation */

$this->breadcrumbs=array(
	'Doctordesignations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doctordesignation', 'url'=>array('index')),
	array('label'=>'Manage Doctordesignation', 'url'=>array('admin')),
);
?>

<!--<h1>Create Doctordesignation</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>