<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Profile");
$this->layout = '//layouts/main';
$this->breadcrumbs = array(
    UserModule::t("Profile"),
);
$this->menu = array(
    ((UserModule::isAdmin()) ? array('label' => UserModule::t('Manage Users'), 'url' => array('/user/admin')) : array()),
    array('label' => UserModule::t('List User'), 'url' => array('/user')),
    array('label' => UserModule::t('Edit'), 'url' => array('edit')),
    array('label' => UserModule::t('Change password'), 'url' => array('changepassword')),
    array('label' => UserModule::t('Logout'), 'url' => array('/user/logout')),
);
?><center><h1><?php echo UserModule::t('Your profile'); ?></h1></center>

<?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
    </div>
<?php endif; ?>
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>

            <li><span>Profile</span></li>						
        </ul>
    </div>
</section>    
<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="user_heading">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                
                                <img src="<?php echo yii::app()->request->baseurl; ?>/img/user_avatar_lg.png" alt="">
                               
                            </div>
                            <div class="col-sm-10">
                                <div class="user_heading_info">
                                    <!--												<div class="user_actions pull-right">
                                                                                                                                            <a href="#" class="edit_form" data-toggle="tooltip" data-placement="top auto" title="Edit profile"><span class="icon-edit"></span></a>
                                                                                                                                            <a href="#" class="remove_user" data-toggle="tooltip" data-placement="top auto" title="Remove User"><span class="icon-remove"></span></a>
                                                                                                                                    </div>-->
                                    <p>  <h1><?php echo $model->username; ?>     </h1>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-2">
                            <form class="form-horizontal user_form">
                                <div class="user_content">
<!--                                    <h3 class="heading_a">General</h3>-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo CHtml::encode($model->getAttributeLabel('Username')); ?></label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo CHtml::encode($model->username); ?></p>
                                            <!--														<div class="hidden_control">
                                                                                                                                                                    <input type="text" class="form-control" value="jSmith">
                                                                                                                                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo CHtml::encode($model->getAttributeLabel('Email Address')); ?></label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo CHtml::encode($model->email); ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo CHtml::encode($model->getAttributeLabel('create_at')); ?></label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->create_at; ?> </p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo CHtml::encode($model->getAttributeLabel('lastvisit_at')); ?></label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->lastvisit_at; ?></p>

                                        </div>
                                    </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div></section>
