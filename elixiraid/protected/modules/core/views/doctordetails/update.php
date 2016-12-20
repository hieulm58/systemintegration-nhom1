<?php
/* @var $this DoctordetailsController */
/* @var $model Doctordetails */

$this->breadcrumbs=array(
	'Doctordetails'=>array('index'),
	$model->doctordetailsid=>array('view','id'=>$model->doctordetailsid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctordetails', 'url'=>array('index')),
	array('label'=>'Create Doctordetails', 'url'=>array('create')),
	array('label'=>'View Doctordetails', 'url'=>array('view', 'id'=>$model->doctordetailsid)),
	array('label'=>'Manage Doctordetails', 'url'=>array('admin')),
);
?>

<!--<h1>Update Doctordetails <?php // echo $model->doctordetailsid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>