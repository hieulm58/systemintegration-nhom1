<?php
/* @var $this EmployeetypeController */
/* @var $model Employeetype */

$this->breadcrumbs=array(
	'Employeetypes'=>array('index'),
	$model->employeetypeid=>array('view','id'=>$model->employeetypeid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employeetype', 'url'=>array('index')),
	array('label'=>'Create Employeetype', 'url'=>array('create')),
	array('label'=>'View Employeetype', 'url'=>array('view', 'id'=>$model->employeetypeid)),
	array('label'=>'Manage Employeetype', 'url'=>array('admin')),
);
?>

<!--<h1>Update Employeetype <?php// echo $model->employeetypeid; ?></h1>-->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>