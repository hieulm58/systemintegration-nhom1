<?php
/* @var $this DoctorspecializationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doctorspecializations',
);

$this->menu=array(
	array('label'=>'Create Doctorspecialization', 'url'=>array('create')),
	array('label'=>'Manage Doctorspecialization', 'url'=>array('admin')),
);
?>

<h1>Doctorspecializations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
