<?php
/* @var $this DoctorspecializationController */
/* @var $model Doctorspecialization */

$this->breadcrumbs=array(
	'Doctorspecializations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doctorspecialization', 'url'=>array('index')),
	array('label'=>'Manage Doctorspecialization', 'url'=>array('admin')),
);
?>

<!--<h1>Create Doctorspecialization</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>