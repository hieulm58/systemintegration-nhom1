<?php
/* @var $this HospitalregistrationController */
/* @var $model Hospitalregistration */

$this->breadcrumbs=array(
	'Hospitalregistrations'=>array('index'),
	$model->hospitalregistrationid=>array('view','id'=>$model->hospitalregistrationid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hospitalregistration', 'url'=>array('index')),
	array('label'=>'Create Hospitalregistration', 'url'=>array('create')),
	array('label'=>'View Hospitalregistration', 'url'=>array('view', 'id'=>$model->hospitalregistrationid)),
	array('label'=>'Manage Hospitalregistration', 'url'=>array('admin')),
);
?>

<!--<h1>Update Hospitalregistration <?php// echo $model->hospitalregistrationid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>