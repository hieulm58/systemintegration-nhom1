

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'staffregistration-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnChange' => true,
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
            ),
        'enableAjaxValidation' => true,
    ));
    ?>
    <section id="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

                <li><span>Staff Registration</span></li>						
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
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Staff Registration</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tbb_a">Registration</a></li>
                                        <li><a data-toggle="tab" href="#tbb_b">View staffs</a></li>
                                        <!--                                        <li><a data-toggle="tab" href="#tbb_c">Section 3</a></li>-->
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tbb_a" class="tab-pane active">
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->label($model, 'First name', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'firstname', array('size' => 50, 'maxlength' => 50, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'firstname', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->label($model, 'Last name', array('class' => 'req')); ?>
                                                        <?php //echo $form->textField($model, 'yearofestablishment', array('size' => 50, 'maxlength' => 4, 'class' => 'form-control')); ?>
                                                        <?php echo $form->textField($model, 'lastname', array('class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'lastname', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->label($model, 'Employee type', array('class' => 'req')); ?>
                                                        <?php
                                                        $types = CHtml::listData(Employeetype::model()->findAll('hospitalregistrationid=' . Yii::app()->user->hospitalregistrationid), 'employeetypeid', 'employeetypeid');
                                                        foreach ($types as &$type) {
                                                            $ty = Employeetype::model()->findByPk($type);
                                                            $type = $ty->employeetypename;
                                                        }
                                                        echo CHtml::activeDropDownList($model, 'employeetypeid', $types, array(
                                                            'empty' => Yii::t('app', 'Select Type'), 'class' => "form-control",
                                                        ));
                                                        ?>
                                                        <?php echo $form->error($model, 'employeetypeid', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Department', array('class' => 'req')); ?>
                                                        <?php
                                                        $departments = CHtml::listData(Hospitaldepartment::model()->findAll('hospitalregistrationid=' . Yii::app()->user->hospitalregistrationid), 'hospitaldepartmentid', 'hospitaldepartmentid');
                                                        foreach ($departments as &$department) {
                                                            $dep = Hospitaldepartment::model()->findByPk($department);
                                                            $department = $dep->departmentname;
                                                        }
                                                        echo CHtml::activeDropDownList($model, 'hospitaldepartmentid', $departments, array(
                                                            'empty' => Yii::t('app', 'Select Department'), 'class' => "form-control",
                                                        ));
                                                        ?>
                                                        <?php echo $form->error($model, 'hospitaldepartmentid', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Address', array('class' => 'req')); ?>
                                                        <?php echo $form->textArea($model, 'address', array('class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'address', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">

                                                        <?php echo $form->label($model, 'gender', array('class' => 'req')); ?>
                                                        <?php
                                                        echo $form->radioButtonList($model, 'gender', $model->getGenderOptions(), array(
                                                            'labelOptions' => array('style' => 'display:inline'), // add this code
                                                            'separator' => '  ',));
                                                        ?>
                                                        <?php
                                                        array(
                                                            'labelOptions' => array('style' => 'display:inline'), // add this code
                                                            'separator' => '  ',
                                                                )
                                                        ?>
                                                        <?php echo $form->error($model, 'gender', array('class' => 'alert-danger')); ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Age', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'age', array('class' => 'form-control')); ?>
                                                    
                                                    <?php echo $form->error($model, 'age', array('class' => 'alert-danger')); ?>

                                                </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div data-date-format="dd-mm-yyyy" class="input-group date ebro_datepicker">
                                                        <?php echo $form->labelEx($model, 'Date of joining', array('class' => 'req')); ?> 
                                                        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                        'model' => $model,
                                                        'attribute' => 'dateofjoining',
                                                        'htmlOptions' => array(
                                                        
                                                            'class'=>'form-control'
                                                        ),
                                                        ));?>
                                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    
                                                    <?php echo $form->error($model, 'dateofjoining', array('class' => 'alert-danger')); ?>

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div data-date-format="dd-mm-yyyy" class="input-group date ebro_datepicker">
                                                         <?php echo $form->labelEx($model, 'Date of retirement', array('class' => '')); ?>
                                                        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                        'model' => $model,
                                                        'attribute' => 'dateofretiremnent',
                                                        'htmlOptions' => array(
                                                        
                                                            'class'=>'form-control'
                                                        ),
                                                        ));?>
                                                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    
                                                    <?php echo $form->error($model, 'dateofretiremnent', array('class' => 'alert-danger')); ?>

                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Contact number', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'phone', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'phone', array('class' => 'alert-danger')); ?>
                                                    </div>

                                                </div></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->label($model, 'refereceperson', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'refereceperson', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'refereceperson', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'reference contact', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'referencecontact', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'referencecontact', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->label($model, 'Employee code', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'employeecode', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'employeecode', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Email address', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'email', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <?php echo $form->labelEx($model, 'Qualification', array('class' => 'req')); ?>
                                                        <?php echo $form->textField($model, 'qualification', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                                                        <?php echo $form->error($model, 'qualification', array('class' => 'alert-danger')); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
<!--                                                        <label for="reg_input_photo" ><?php //echo Yii::t('app','Upload Logo');           ?>Upload Photo</label>-->
                                                        <?php
                                                        echo CHtml::activeFileField($model, 'photo', array('class' => ''));
                                                        echo $form->error($model, 'photo', array('class' => 'alert-danger'));
                                                        ?>
                                                    </div>
                                                </div></div>

                                            <center> <div class="col-sm-8 col-sm-offset-2">
                                                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save', array('class' => 'btn btn-primary')); ?>
                                                </div></center>
                                        </div>

                                        <div id="tbb_b" class="tab-pane">

                                            <p>    <?php
                                                $this->widget('zii.widgets.grid.CGridView', array(
                                                    'id' => 'staffregistration-grid',
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
                                                            'name' => Yii::t('app', 'firstname'),
                                                            'value' => '$data->firstname',
                                                            'htmlOptions' => array('width' => '15%'),
                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'lastname'),
                                                            'value' => '$data->lastname',
                                                            'htmlOptions' => array('width' => '5%'),
                                                        ),
//                                                        array(
//                                                            'name' => Yii::t('app', 'Employee type'),
//                                                            'value' => '$data->employeetype->employeetypename',
//                                                            'htmlOptions' => array('width' => '15%'),
//                                                        ),
//                                                        array(
//                                                            'name' => Yii::t('app', 'Department'),
//                                                            'value' => '$data->departmentname->departmentname',
//                                                            'htmlOptions' => array('width' => '10%'),
//                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'Address'),
                                                            'value' => '$data->address',
                                                            'htmlOptions' => array('width' => '8%'),
                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'Phone'),
                                                            'value' => '$data->phone',
                                                            'htmlOptions' => array('width' => '10%'),
                                                        ),
                                                        array(
                                                            'name' => Yii::t('app', 'Qualification'),
                                                            'value' => '$data->qualification',
                                                            'htmlOptions' => array('width' => '10%'),
                                                        ),
//                                                                array(
//                                                                    'name' => Yii::t('app', 'Fax'),
//                                                                    'value' => '$data->fax',
//                                                                    'htmlOptions' => array('width' => '10%'),
//                                                                ),
//                                                                array(
//                                                                    'name' => Yii::t('app', 'Buildings'),
//                                                                    'value' => '$data->noofbuildings',
//                                                                    'htmlOptions' => array('width' => '5%'),
//                                                                ),
//                                                                array(
//                                                                    'name' => Yii::t('app', 'Contact person'),
//                                                                    'value' => '$data->contactperson',
//                                                                    'htmlOptions' => array('width' => '10%'),
//                                                                ),
//                                                                 array(
//                                                                    'name' => Yii::t('app', 'Logo'),
//                                                                    'value' => '$data->logo',
//                                                                    'htmlOptions' => array('width' => '10%'),
//                                                                ),
//                                                        array(
//                                                            'name' => Yii::t('app', 'Promoted by'),
//                                                            'value' => '$data->promotedby',
//                                                            'htmlOptions' => array('width' => '10%'),
//                                                        ),
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
                                                                    'id' => $model->staffregistrationid,
                                                                    'label' => '',
                                                                    'imageUrl' => '',
                                                                    'options' => array('class' => 'glyphicon glyphicon-remove'),
                                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                                ),
                                                                'view' => array(
                                                                    'id' => $model->staffregistrationid,
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
                                        </div></div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div></div>

        </div></div></div></section>




<?php $this->endWidget(); ?>

