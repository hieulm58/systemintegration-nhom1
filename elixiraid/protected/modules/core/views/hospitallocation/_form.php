<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'hospitallocation-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnChange' => true,
            'validateOnSubmit' => true,
        ),
        'enableAjaxValidation' => true,
    ));
    ?>
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
                            <h4 class="panel-title">Hospital buildings</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">

                                    <fieldset>
<!--                                        <legend><span>Add Building Details</span></legend>-->
                                    </fieldset>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'buidingname', array('class' => 'req')); ?>
                                                <?php echo $form->textField($model, 'buidingname', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control')); ?>
                                                <?php echo $form->error($model, 'buidingname', array('class' => 'alert-danger')); ?>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'buildingcode', array('class' => 'req')); ?>
                                                <?php echo $form->textField($model, 'buildingcode', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control')); ?>
                                                <?php echo $form->error($model, 'buildingcode', array('class' => 'alert-danger')); ?>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <center><div class="col-sm-6 col-sm-offset-2">
                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add Details' : 'Save', array('class' => 'btn btn-primary')); ?>
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
                                                    'id' => 'hospitallocation-grid',
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
                                                            'name' => Yii::t('app', 'Building name'),
                                                            'value' => '$data->buidingname',
                                                            'htmlOptions' => array('width' => '15%'),
                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'Building code'),
                                                            'value' => '$data->buildingcode',
                                                            'htmlOptions' => array('width' => '15%'),
                                                        ),
                                                        array(
                                                            'class' => 'CButtonColumn',
                                                            'header' => 'Manage',
                                                            'template' => '{update} {delete} ',
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

            </div></div>










    </div></div></div></section>

<?php $this->endWidget();
?>








