<?php
/* @var $this DoctordetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doctordetails',
);

$this->menu=array(
	array('label'=>'Create Doctordetails', 'url'=>array('create')),
	array('label'=>'Manage Doctordetails', 'url'=>array('admin')),
);
?>

<h1>Doctordetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
