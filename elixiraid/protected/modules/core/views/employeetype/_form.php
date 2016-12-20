<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'employeetype-form',
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
                            <h4 class="panel-title">Employee Type</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">

                                   

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'employeetypename', array('class' => 'req')); ?>
                                                <?php echo $form->textField($model, 'employeetypename', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                <?php echo $form->error($model, 'employeetypename',array('class'=>'alert-danger')); ?>
                                            </div>
                                        </div></div>




                                </div>
                                <center><div class="col-sm-6 col-sm-offset-2">
                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add employee type' : 'Save', array('class' => 'btn btn-primary')); ?>
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
                                                    'id' => 'employeetype-grid',
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
                                                            'htmlOptions' => array('width' => '25%'),
                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'Employee type'),
                                                            'value' => '$data->employeetypename',
                                                            'htmlOptions' => array('width' => '65%'),
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
                                                                    'id' => $model->employeetypeid,
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

            </div>










    </div></div></div></section>

<?php $this->endWidget();
?>











