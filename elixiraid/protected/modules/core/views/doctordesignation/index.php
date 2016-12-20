<?php
/* @var $this DoctordesignationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doctordesignations',
);

$this->menu=array(
	array('label'=>'Create Doctordesignation', 'url'=>array('create')),
	array('label'=>'Manage Doctordesignation', 'url'=>array('admin')),
);
?>

<h1>Doctordesignations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
