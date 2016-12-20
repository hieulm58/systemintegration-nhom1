<?php
/* @var $this DoctordetailsController */
/* @var $model Doctordetails */

$this->breadcrumbs=array(
	'Doctordetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doctordetails', 'url'=>array('index')),
	array('label'=>'Manage Doctordetails', 'url'=>array('admin')),
);
?>

<!--<h1>Create Doctordetails</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>