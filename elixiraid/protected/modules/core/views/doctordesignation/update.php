<?php
/* @var $this DoctordesignationController */
/* @var $model Doctordesignation */

$this->breadcrumbs=array(
	'Doctordesignations'=>array('index'),
	$model->doctordesignationid=>array('view','id'=>$model->doctordesignationid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctordesignation', 'url'=>array('index')),
	array('label'=>'Create Doctordesignation', 'url'=>array('create')),
	array('label'=>'View Doctordesignation', 'url'=>array('view', 'id'=>$model->doctordesignationid)),
	array('label'=>'Manage Doctordesignation', 'url'=>array('admin')),
);
?>

<!--<h1>Update Doctordesignation <?php // echo $model->doctordesignationid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>