<?php
/* @var $this HospitalregistrationController */
/* @var $model Hospitalregistration */

$this->breadcrumbs=array(
	'Hospitalregistrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hospitalregistration', 'url'=>array('index')),
	array('label'=>'Manage Hospitalregistration', 'url'=>array('admin')),
);
?>

<!--<h1>Create Hospitalregistration</h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>