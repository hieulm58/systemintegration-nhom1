<?php
/* @var $this EmployeetypeController */
/* @var $model Employeetype */

$this->breadcrumbs=array(
	'Employeetypes'=>array('index'),
	$model->employeetypeid,
);

$this->menu=array(
	array('label'=>'List Employeetype', 'url'=>array('index')),
	array('label'=>'Create Employeetype', 'url'=>array('create')),
	array('label'=>'Update Employeetype', 'url'=>array('update', 'id'=>$model->employeetypeid)),
	array('label'=>'Delete Employeetype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->employeetypeid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employeetype', 'url'=>array('admin')),
);
?>

<h1>View Employeetype #<?php echo $model->employeetypeid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'employeetypeid',
		'employeetypename',
	),
)); ?>
