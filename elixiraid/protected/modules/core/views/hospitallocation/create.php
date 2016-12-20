<?php

$this->breadcrumbs=array(
	'Hospitallocations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hospitallocation', 'url'=>array('index')),
	array('label'=>'Manage Hospitallocation', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>