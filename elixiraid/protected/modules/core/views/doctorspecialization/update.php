<?php
/* @var $this DoctorspecializationController */
/* @var $model Doctorspecialization */

$this->breadcrumbs=array(
	'Doctorspecializations'=>array('index'),
	$model->doctorspecializationid=>array('view','id'=>$model->doctorspecializationid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doctorspecialization', 'url'=>array('index')),
	array('label'=>'Create Doctorspecialization', 'url'=>array('create')),
	array('label'=>'View Doctorspecialization', 'url'=>array('view', 'id'=>$model->doctorspecializationid)),
	array('label'=>'Manage Doctorspecialization', 'url'=>array('admin')),
);
?>

<!--<h1>Update Doctorspecialization <?php // echo $model->doctorspecializationid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>