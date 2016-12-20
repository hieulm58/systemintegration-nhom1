<?php
/* @var $this HospitaldepartmentController */
/* @var $model Hospitaldepartment */

$this->breadcrumbs=array(
	'Hospitaldepartments'=>array('index'),
	$model->hospitaldepartmentid,
);

$this->menu=array(
	array('label'=>'List Hospitaldepartment', 'url'=>array('index')),
	array('label'=>'Create Hospitaldepartment', 'url'=>array('create')),
	array('label'=>'Update Hospitaldepartment', 'url'=>array('update', 'id'=>$model->hospitaldepartmentid)),
	array('label'=>'Delete Hospitaldepartment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->hospitaldepartmentid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hospitaldepartment', 'url'=>array('admin')),
);
?>

<h1>View Hospitaldepartment #<?php echo $model->hospitaldepartmentid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hospitaldepartmentid',
		'hospitalregistrationid',
		'buildingfloorid',
		'departmentname',
		'headname',
		'headaddress',
		'contactnumber',
	),
)); ?>
