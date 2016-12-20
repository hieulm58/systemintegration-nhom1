<?php
/* @var $this DoctordesignationController */
/* @var $model Doctordesignation */

$this->breadcrumbs=array(
	'Doctordesignations'=>array('index'),
	$model->doctordesignationid,
);

$this->menu=array(
	array('label'=>'List Doctordesignation', 'url'=>array('index')),
	array('label'=>'Create Doctordesignation', 'url'=>array('create')),
	array('label'=>'Update Doctordesignation', 'url'=>array('update', 'id'=>$model->doctordesignationid)),
	array('label'=>'Delete Doctordesignation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doctordesignationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctordesignation', 'url'=>array('admin')),
);
?>

<h1>View Doctordesignation #<?php echo $model->doctordesignationid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'doctordesignationid',
		'designation',
	),
)); ?>
