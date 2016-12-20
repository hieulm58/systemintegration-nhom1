<?php
/* @var $this BuildingfloorController */
/* @var $model Buildingfloor */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'buildingfloor-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnChange' => true,
            'validateOnSubmit' => true,
        ),
        'enableAjaxValidation' => false,
    ));
    ?>
    <section id="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

                <li><span>Floors</span></li>						
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
                            <h4 class="panel-title">Hospital Floor</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->labelEx($model, 'Floor Name', array('class' => 'req')); ?>
                                                <?php echo $form->textField($model, 'floorname', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                <?php echo $form->error($model, 'floorname', array('class' => 'alert-danger')); ?>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->labelEx($model, 'Floor Code', array('class' => 'col-sm-5 control-label')); ?>
                                                <?php echo $form->textField($model, 'floorccode', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                <?php echo $form->error($model, 'floorcode', array('class' => 'alert-danger')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->labelEx($model, 'Building name', array('class' => 'req')); ?>
                                                <?php
                                                $types = CHtml::listData(Hospitallocation::model()->findAll('hospitalregistrationid=' . Yii::app()->user->hospitalregistrationid), 'hospitallocationid', 'hospitallocationid');
                                                foreach ($types as &$type) {
                                                    $ty = Hospitallocation::model()->findByPk($type);
                                                    $type = $ty->buidingname;
                                                }
                                                echo CHtml::activeDropDownList($model, 'hospitallocationid', $types, array(
                                                    'empty' => Yii::t('app', 'Select Building'), 'class' => "form-control",
                                                ));
                                                ?>
                                                <?php echo $form->error($model, 'hospitallocationid', array('class' => 'alert-danger')); ?>
                                            </div>
                                        </div></div>
                                    

                                </div>
                                <center><div class="col-sm-6 col-sm-offset-2">
                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add Building' : 'Save', array('class' => 'btn btn-primary')); ?>
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
                                                <?php
                                                $this->widget('zii.widgets.grid.CGridView', array(
                                                'id' => 'buildingfloor-grid',
                                                'dataProvider' => $model->search(),
                                                'selectableRows' => 1,
                                                            'ajaxUpdate' => false,
                                                            'hideHeader' => false,
                                                            'template' => "{items}\n{pager}",
                                                            'enableHistory' => false,
                                                            'enableSorting' => false,
                                                            'cssFile' => Yii::app()->baseUrl . '/css/grid.css',
                                                            'htmlOptions' => array('class' => 'grid-view'),
                                                            'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/grid.css',
                                                                'maxButtonCount' => 4,
                                                                'nextPageLabel' => '>',
                                                                'prevPageLabel' => '<',
                                                                'firstPageLabel' => '<<',
                                                                'lastPageLabel' => '>>',
                                                                'header' => '',
                                                            ),
                                                            'columns' => array(
                                                                array(
                                                                    'header' => Yii::t('app', 'Sl.No.'),
                                                                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                                                                    'htmlOptions' => array('width' => '5%'),
                                                                ),
                                                                
                                                                array(
                                                                    'name' => Yii::t('app', 'Building'),
                                                                    'value' => '$data->hospitallocation->buidingname',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                                 array(
                                                                    'name' => Yii::t('app', 'Floor Code'),
                                                                    'value' => '$data->floorccode',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'Floor Name'),
                                                                    'value' => '$data->floorname',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                               array(
                                                                    'class' => 'CButtonColumn',
                                                                    'header' => 'Manage',
                                                                    'template' => '{update} {delete}',
                                                                    'htmlOptions' => array('width' => '5%'),
                                                                    'buttons' => array(
                                                                        'update' => array(
                                                                            'label' => '',
                                                                            'imageUrl' => '',
                                                                            'options' => array('class' => 'glyphicon glyphicon-pencil'),
                                                                        ),
                                                                        'delete' => array(
                                                                            'id' => $model->hospitallocationid,
                                                                            'label' => '',
                                                                            'imageUrl' => '',
                                                                            'options' => array('class' => 'glyphicon glyphicon-remove'),
                                                                            'confirm' => 'Are you sure you want to delete this item?',
                                                                        ),
                                                                        
                                                                    ),
                                                                ),
                                                            ),
                                                        ));
                                                        ?>
                                                </div>
                                                </div></div>

                                                </div>

                                                </div>
                                                </div>
                                                </div>

                                                </div>

                                                </div></div>










                                                </div></div></section>

                                                <?php $this->endWidget();
                                                ?>








