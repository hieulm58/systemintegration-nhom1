<?php
/* @var $this StaffregistrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Staffregistrations',
);

$this->menu=array(
	array('label'=>'Create Staffregistration', 'url'=>array('create')),
	array('label'=>'Manage Staffregistration', 'url'=>array('admin')),
);
?>

<h1>Staffregistrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
