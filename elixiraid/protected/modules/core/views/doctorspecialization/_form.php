<?php
/* @var $this DoctorspecializationController */
/* @var $model Doctorspecialization */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctorspecialization-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

            <li><span>Buildings</span></li>						
        </ul>
    </div>
</section>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <center> <div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><?php echo Yii::app()->user->getFlash('success'); ?></div> </center>
    </div>
<?php endif; ?>

<!--<center> <div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><?php echo Yii::app()->user->getFlash('success'); ?></div> </center>-->

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">




            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Doctor specialization</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">

                                   

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                  <div class="col-sm-12">
                                                   <div class="form-group">
                                                   <label for="Specialization" class="req"><?php echo Yii::t('app','Specialization'); ?></label>
                                                   <?php echo $form->textField($model,'specialization',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
                                                   <?php echo $form->error($model,'specialization',array('class'=>'alert-danger')); ?>
                                           </div>
                                               </div>
                                            </div>
                                        </div></div>




                                </div>
                                <center> <div class="col-sm-7 col-sm-offset-2">
                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
                                    </div></center>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">
                   
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    




                                    <div class="row"> <div class="col-sm-12">
                                            <div class="form-group">
                                                 <?php $this->widget('zii.widgets.grid.CGridView', array(
                                                                'id'=>'doctorspecialization-grid',
                                                                'dataProvider'=>$model->search(),
                                                                'template' => "{items}\n{pager}",
                                                                            'cssFile' => Yii::app()->baseUrl . '/css/grid.css',
                                                                            'htmlOptions' => array('class' => 'grid-view table-responsive'),
                                                                            'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/grid.css',
                                                                            'maxButtonCount' => 4,
                                                                            'nextPageLabel' => '>',
                                                                            'prevPageLabel' => '<',
                                                                            'firstPageLabel' => '<<',
                                                                            'lastPageLabel' => '>>',
                                                                            'header' => '',
                                                                            ),
                                                                'columns'=>array(
                                                                        array(
                                                                            'header' => Yii::t('app','Sl.No.'),
                                                                            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                                                                            'htmlOptions' => array('width' => '5%'),
                                                                              ),
                                                                        array(
                                                                            'name' => Yii::t('app','Specialization'),
                                                                            'value' => '$data->specialization',
                                                                            'htmlOptions' => array('width' => '15%'),
                                                                             ),
                                                                        array(
                                                                                'class'=>'CButtonColumn',
                                                                                'header' =>Yii::t('app','Manage'),
                                                                                'htmlOptions' => array('width' => '10%'),
                                                                                'template' => '{update}   {delete} ',
                                                                                'buttons' => array(
                                                                                'update' => array(
                                                                                'label' => '',
                                                                                'imageUrl' => '',
                                                                                'options' => array('class' => 'glyphicon glyphicon-pencil'),
                                                                                ),
                                                                                'delete' => array(
                                                                                    'label' => '',
                                                                                    'imageUrl' => '',
                                                                                    'options' => array('class' => 'glyphicon glyphicon-remove'),
                                                                                ),

                                                                        ),
                                                                                          
                                                                        ),
                                                                ),
                                                        )); ?>
                                            </div>
                                        </div></div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>










    </div></div></div></section>

<?php $this->endWidget();
?>












	
   