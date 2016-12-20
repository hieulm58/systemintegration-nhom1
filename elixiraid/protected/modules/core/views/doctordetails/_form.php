
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'doctordetails-form',
        
        'clientOptions' => array(
            'validateOnChange' => true,
            'validateOnSubmit' => true,
        ),'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
        'enableAjaxValidation' => true,
    ));
    ?>

    <section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

            <li><span>Doctor Registration</span></li>						
        </ul>
    </div>
</section>
    <section class="container clearfix main_section">
        <div id="main_content_outer" class="clearfix">
            <div id="main_content">

                <!-- main content -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Doctor Registration</h4>
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tbb_a">Register</a></li>
                                            <li><a data-toggle="tab" href="#tbb_b">View details</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tbb_a" class="tab-pane active">
                                                <?php
                                                if (Yii::app()->user->hasFlash('success')):
                                                    ?>
                                                    <div class="alert alert-success">
                                                        <?php echo Yii::app()->user->getFlash('success'); ?>
                                                        <?php
                                                        Yii::app()->clientScript->registerScript(
                                                                'myHideEffect', '$(".alert alert-success").animate({opacity: 1.0}, 1000).fadeOut("slow");', CClientScript::POS_READY
                                                        );
                                                        ?>
                                                    </div>
                                                <?php endif; ?>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Doctor Name" class="req"><?php echo Yii::t('app', 'Doctor Name'); ?></label>
                                                            <?php echo $form->textField($model, 'doctorname', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control')); ?>
                                                            <?php echo $form->error($model, 'doctorname', array('class' => 'alert-danger')); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Address" class="req"><?php echo Yii::t('app', 'Address'); ?></label>
                                                            <?php echo $form->textField($model, 'address', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                            <?php echo $form->error($model, 'address', array('class' => 'alert-danger')); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="contact No" class="req"><?php echo Yii::t('app', 'Contact No'); ?></label>
                                                            <?php echo $form->textField($model, 'contactno', array('class' => 'form-control')); ?>
                                                            <?php echo $form->error($model, 'contactno', array('class' => 'alert-danger')); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Consultant fee" class="req"><?php echo Yii::t('app', 'Consultant Fee'); ?></label>
                                                            <?php echo $form->textField($model, 'consultantfee', array('class' => 'form-control')); ?>
                                                            <?php echo $form->error($model, 'consultantfee', array('class' => 'alert-danger')); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Shift type" class="req"><?php echo Yii::t('app', 'Shift type'); ?></label>

                                                            <?php echo $form->dropDownList($model, 'drshift', array('' => 'Please Select', 'Night shift' => 'Night shift', 'Day shift' => 'Day shift'), array('class' => 'form-control')); ?>
                                                            <?php echo $form->error($model, 'drshift', array('class' => 'alert-danger')); ?>
                                                        </div>  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Specialization" class="req"><?php echo Yii::t('app', 'Specialization'); ?></label>
                                                            <?php
                                                            $spec = CHtml::listData(Doctorspecialization::model()->findAll('hospitalregistrationid=' . Yii::app()->user->hospitalregistrationid), 'doctorspecializationid', 'specialization');
                                                            echo CHtml::activeDropDownList($model, 'doctorspecializationid', $spec, array(
                                                                'empty' => Yii::t('app', 'Select specialization'), 'class' => "form-control",
                                                            ));
                                                            echo $form->error($model, 'doctorspecializationid', array('class' => 'alert-danger'));
                                                            ?>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Designation" class="req"><?php echo Yii::t('app', 'Designation'); ?></label>
                                                            <?php
                                                            $dd = CHtml::listData(Doctordesignation::model()->findAll('hospitalregistrationid=' . Yii::app()->user->hospitalregistrationid), 'doctordesignationid', 'designation');
                                                            echo CHtml::activeDropDownList($model, 'doctordesignationid', $dd, array(
                                                                'empty' => Yii::t('app', 'Select designation'), 'class' => "form-control",
                                                            ));
                                                            echo $form->error($model, 'doctordesignationid', array('class' => 'alert-danger'));
                                                            ?>
                                                        </div>  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="Doctor code" class="req"><?php echo Yii::t('app', 'Doctor code'); ?></label>
                                                            <?php echo $form->textField($model, 'doctorcode', array('class' => 'form-control')); ?>
                                                            
                                                            <?php echo $form->error($model, 'doctorcode', array('class' => 'alert-danger')); ?>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-sm-56">
                                                        <div class="form-group">
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="Date of Joining" class="req"><?php echo Yii::t('app', 'Date of Join'); ?></label>
                                                        <?php
                                                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                            'name' => 'Doctordetails[dateofjoin]',
                                                            'id' => 'Doctordetails_dateofjoin',
                                                            'value' => Yii::app()->dateFormatter->format("y-M-d", strtotime($model->dateofjoin)),
                                                            'options' => array(
                                                                'showAnim' => 'fold',
                                                            ),
                                                            'htmlOptions' => array(
                                                                'class' => 'form-control'
                                                            ),
                                                        ));
                                                        ?>
                                                        <?php //echo $form->textField($model,'dateofjoin',array('class'=>'form-control')); ?>


                                                        <?php echo $form->error($model, 'dateofjoin', array('class' => 'alert-danger')); ?>

                                                    </div>
                                                </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <label for="Doctor code" class="req"><?php echo Yii::t('app', 'Email'); ?></label>
                                                            <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
                                                            
                                                            <?php echo $form->error($model, 'email', array('class' => 'alert-danger')); ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <center><div class="col-sm-10">
                                                    <div class="form-group"> 
                                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary', 'align' => 'center')); ?>
                                                        </div>
                                                    </div><center>
                                            </div>
                                        </div>
                                        <div id="tbb_b" class="tab-pane">
                                            <?php
                                            $this->widget('zii.widgets.grid.CGridView', array(
                                                'id' => 'doctordetails-grid',
                                                'dataProvider' => $model->search(),
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
                                                'columns' => array(
                                                    /* 'doctordetailsid',
                                                      'hospitalregistrationid',
                                                      'doctordesignationid',
                                                      'doctorspecializationid',
                                                      'drshiftid',
                                                      'doctorcode', */
                                                    array(
                                                        'header' => Yii::t('app', 'Sl.No.'),
                                                        'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                                                        'htmlOptions' => array('width' => '5%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Doctor name'),
                                                        'value' => '$data->doctorname',
                                                        'htmlOptions' => array('width' => '15%'),
                                                    ),
//                                                    array(
//                                                        'name' => Yii::t('app', 'Hospital name'),
//                                                        'value' => '$data->hospitalregistration->hospitalname',
//                                                        'htmlOptions' => array('width' => '15%'),
//                                                    ),
//                                                    array(
//                                                        'name' => Yii::t('app', 'Specialization'),
//                                                        'value' => '$data->doctorspecialization->specialization',
//                                                        'htmlOptions' => array('width' => '5%'),
//                                                    ),
//                                                    array(
//                                                        'name' => Yii::t('app', 'Designation'),
//                                                        'value' => '$data->doctordesignation->designation',
//                                                        'htmlOptions' => array('width' => '5%'),
//                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Doctor code'),
                                                        'value' => '$data->doctorcode',
                                                        'htmlOptions' => array('width' => '5%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Type of shift'),
                                                        'value' => '$data->drshift',
                                                        'htmlOptions' => array('width' => '15%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Address'),
                                                        'value' => '$data->address',
                                                        'htmlOptions' => array('width' => '15%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Contact No'),
                                                        'value' => '$data->contactno',
                                                        'htmlOptions' => array('width' => '5%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Consultant Fee'),
                                                        'value' => '$data->consultantfee',
                                                        'htmlOptions' => array('width' => '5%'),
                                                    ),
                                                    array(
                                                        'name' => Yii::t('app', 'Date of join'),
                                                        'value' => '$data->dateofjoin',
                                                        'htmlOptions' => array('width' => '5%'),
                                                    ),
                                                    array(
                                                        'class' => 'CButtonColumn',
                                                        'header' => Yii::t('app', 'Manage'),
                                                        'htmlOptions' => array('width' => '10%'),
                                                        'template' => '{update}   {delete} {view}',
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
                                                            'view' => array(
                                                                'label' => '',
                                                                'imageUrl' => '',
                                                                'options' => array('class' => 'glyphicon glyphicon-eye-open'),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ));
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </section>                
                <?php $this->endWidget(); ?>

            </div>


        </div><!-- form -->
