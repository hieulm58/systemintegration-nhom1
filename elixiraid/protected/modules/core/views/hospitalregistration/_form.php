<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hospitalregistration-form',
    'enableClientValidation' => false,
    'clientOptions' => array(
        'validateOnChange' => true,
        'validateOnSubmit' => true,
    ), 'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
//Other elements
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => true,
        ));
?>

<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<?php // echo $form->errorSummary($model);  ?>
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

            <li><span>Hospitals</span></li>						
        </ul>
    </div>
</section>
<?php if (Yii::app()->user->hasFlash('success')): ?>
    <center> <div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><?php echo Yii::app()->user->getFlash('success'); ?></div> </center>
    </div>
<?php endif; ?>
    <?php if (Yii::app()->user->hasFlash('error')): ?>
    <center> <div class="alert alert-danger"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><?php echo Yii::app()->user->getFlash('error'); ?></div> </center>
    </div>
<?php endif; ?>

<!--<center> <div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><?php// echo Yii::app()->user->getFlash('success'); ?></div> </center>-->

<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">




            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Hospital Registration</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tbb_a">Registration</a></li>
                                        <li><a data-toggle="tab" href="#tbb_b">View Hospital</a></li>
                                        <!--                                        <li><a data-toggle="tab" href="#tbb_c">Section 3</a></li>-->
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tbb_a" class="tab-pane active">
                                            <fieldset>
                                                <legend><span>Add Hospital Details</span></legend>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Hospital Name', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'hospitalname', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'hospitalname', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Year of establishment', array('class' => 'req')); ?>
                                                        <?php //echo $form->textField($model, 'yearofestablishment', array('size' => 50, 'maxlength' => 4, 'class' => 'form-control')); ?>
                                                        <?php echo  $form->dropDownList($model, 'yearofestablishment', $model->getYearsList(),array('empty' => 'Select year','class'=>'form-control')); ?>
                                                        <?php echo $form->error($model, 'yearofestablishment', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
<!--                                                        <label for="Country" class="req"><?php // echo Yii::t('app','Country');      ?></label>-->
                                                        <?php echo $form->labelEx($model, 'Country', array('class' => 'req')); ?>
                                                        <?php echo $form->dropdownList($model, 'country', array(), array('empty' => 'Select Country', 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'country', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'State', array('class' => 'req')); ?>
                                                        <?php echo $form->dropdownList($model, 'state', array(), array('empty' => 'Select state', 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'state', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Address', array('class' => 'req')); ?>
                                                        <?php echo $form->textArea($model, 'address', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'address', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Fax', array('class' => 'col-sm-5 control-label')); ?>
                                                        <?php echo $form->textField($model, 'fax', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'fax', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Phone', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'phone', array('class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'phone', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Email', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'email', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Number of buildings', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'noofbuildings', array('class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'noofbuildings', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Name of contact person', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'contactperson', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'contactperson', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Promoted By', array('class' => 'col-sm-5 control-label')); ?>
                                                        <?php echo $form->textField($model, 'promotedby', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'promotedby', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
<!--                                                        <label for="reg_input_logo" ><?php //echo Yii::t('app','Upload Logo'); ?></label>-->
                                                            <?php
                                                       
                                                            echo CHtml::activeFileField($model, 'logo',array('class'=>''));
                                                            echo $form->error($model, 'logo', array('class' => 'alert-danger'));
                                                            ?>
                                                    </div>
                                                </div>

                                                <center> <div class="col-sm-8 col-sm-offset-2">
                                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Add Hospital' : 'Save', array('class' => 'btn btn-primary')); ?>
                                                    </div></center>
                                            </div></div>

                                        <div id="tbb_b" class="tab-pane">

                                            <p><?php
                                                        $this->widget('zii.widgets.grid.CGridView', array(
                                                            'id' => 'hospitalregistration-grid',
                                                            'dataProvider' => $model->search(),
                                                            //'filter'=>$model,
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
                                                                    'name' => Yii::t('app', 'Name'),
                                                                    'value' => '$data->hospitalname',
                                                                    'htmlOptions' => array('width' => '15%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'Year of establishment'),
                                                                    'value' => '$data->yearofestablishment',
                                                                    'htmlOptions' => array('width' => '5%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'Address'),
                                                                    'value' => '$data->address',
                                                                    'htmlOptions' => array('width' => '15%'),
                                                                ),
                                                                 array(
                                                                    'name' => Yii::t('app', 'Country'),
                                                                    'value' => '$data->country',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'State'),
                                                                    'value' => '$data->state',
                                                                    'htmlOptions' => array('width' => '8%'),
                                                                ),
                                                               
                                                                array(
                                                                    'name' => Yii::t('app', 'Phone'),
                                                                    'value' => '$data->phone',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'Email'),
                                                                    'value' => '$data->email',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),
                                                                array(
                                                                    'name' => Yii::t('app', 'Fax'),
                                                                    'value' => '$data->fax',
                                                                    'htmlOptions' => array('width' => '10%'),
                                                                ),

                                                                array(
                                                                    'class' => 'CButtonColumn',
                                                                    'header' => 'Manage',
                                                                    'template' => '{update} {delete} {view}',
                                                                    'htmlOptions' => array('width' => '5%'),
                                                                    'buttons' => array(
                                                                        'update' => array(
                                                                            'label' => '',
                                                                            'imageUrl' => '',
                                                                            'options' => array('class' => 'glyphicon glyphicon-pencil'),
                                                                        ),
                                                                        'delete' => array(
                                                                            'id' => $model->hospitalregistrationid,
                                                                            'label' => '',
                                                                            'imageUrl' => '',
                                                                            'options' => array('class' => 'glyphicon glyphicon-remove'),
                                                                            'confirm' => 'Are you sure you want to delete this item?',
                                                                        ),
                                                                        'view' => array(
                                                                            'id' => $model->hospitalregistrationid,
                                                                            'label' => '',
                                                                            'imageUrl' => '',
                                                                            'options' => array('class' => 'glyphicon glyphicon-eye-open'),
                                                                            'confirm' => 'Are you sure you want to delete this item?',
                                                                        ),
                                                                    ),
                                                                ),
                                                            ),
                                                        ));
                                                        ?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div></div>

            </div></div></div></section>

<?php $this->endWidget(); ?>
<script>
    populateCountries("Hospitalregistration_country", "Hospitalregistration_state");
</script>