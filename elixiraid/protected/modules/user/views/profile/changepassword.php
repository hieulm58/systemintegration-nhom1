<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Change Password");
$this->breadcrumbs = array(
    UserModule::t("Profile") => array('/user/profile'),
    UserModule::t("Change Password"),
);
$this->menu = array(
    ((UserModule::isAdmin()) ? array('label' => UserModule::t('Manage Users'), 'url' => array('/user/admin')) : array()),
    array('label' => UserModule::t('List User'), 'url' => array('/user')),
    array('label' => UserModule::t('Profile'), 'url' => array('/user/profile')),
    array('label' => UserModule::t('Edit'), 'url' => array('edit')),
    array('label' => UserModule::t('Logout'), 'url' => array('/user/logout')),
);
?>



<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'changepassword-form',
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>


    <section id="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

                <li><span>Change password</span></li>						
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
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Change password</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">



                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'oldPassword',array('class'=>'req')); ?>
                                                <?php echo $form->passwordField($model, 'oldPassword',array('class'=>'form-control')); ?>
                                                <?php echo $form->error($model, 'oldPassword',array('class'=>'alert-danger')); ?>
                                            </div>
                                        </div></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'password',array('class'=>'req')); ?>
                                                <?php echo $form->passwordField($model, 'password',array('class'=>'form-control')); ?>
                                                <?php echo $form->error($model, 'password',array('class'=>'alert-danger')); ?>
                                                <p class="hint">
                                                    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"> <div class="col-sm-12">
                                            <div class="form-group">
                                                <?php echo $form->label($model, 'verifyPassword',array('class'=>'req')); ?>
                                                <?php echo $form->passwordField($model, 'verifyPassword',array('class'=>'form-control')); ?>
                                                <?php echo $form->error($model, 'verifyPassword',array('class'=>'alert-danger')); ?>
                                            </div>
                                        </div></div>


                                </div>
                                <center><div class="col-sm-6 col-sm-offset-2">
                                        <?php echo CHtml::submitButton(UserModule::t("Save"), array('class' => 'btn btn-primary btn-lg')); ?>
                                    </div></center>
                            </div>
                        </div>
                    </div>

                </div>



            </div></div>










    </div></div></div></section>

<?php $this->endWidget(); ?>
