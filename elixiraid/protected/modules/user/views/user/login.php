<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);

?>

<!--<h1><?php // echo UserModule::t("Login"); ?></h1>-->

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<!--<p><?php // echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>-->

<div class="form">
<?php echo CHtml::beginForm(); ?>

	<!--<p class="note"><?php // echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>-->
	
	<?php echo CHtml::errorSummary($model); ?>
	<div class="form-group">
                        <label for="login_username">Username</label>
                        <?php echo CHtml::activeTextField($model,'username',array('class'=>'form-control input-lg')); ?>
                        <!--<input type="text" id="login_username" name="login_username" class="form-control input-lg" data-required="true" data-minlength="2" data-required-message="Please enter a valid Username" value="John Smith" >-->
                    </div>
                    <div class="form-group">
                        <label for="login_password">Password </label>
                        <?php echo CHtml::activePasswordField($model,'password',array('class'=>'form-control input-lg')) ?>
                        <!--<input type="password" id="login_password" name="login_password" class="form-control input-lg" data-required="true" data-minlength="6" data-minlength-message="Password should have at least 6 characters." data-required-message="Please enter a valid Password" value="123456">-->
<!--                        <label class="checkbox">
                            <input type="checkbox" name="login_remember" id="login_remember"> Remember me</label>-->
                    </div>
                    <div class="login_submit">
                        <!--<button class="btn btn-primary btn-block btn-lg">Log In</button>-->
                       <?php echo CHtml::submitButton(UserModule::t("Login"),array('class'=>'btn btn-primary btn-block btn-lg')); ?>
                    </div>
<!--	<div class="row">
		<?php // echo CHtml::activeLabelEx($model,'username'); ?>
		<?php // echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php // echo CHtml::activeLabelEx($model,'password'); ?>
		<?php // echo CHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row">
		<p class="hint">
		<?php // echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
	</div>
	
	<div class="row rememberMe">
		<?php // echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php // echo CHtml::activeLabelEx($model,'rememberMe'); ?>
	</div>

	<div class="row submit">
		<?php // echo CHtml::submitButton(UserModule::t("Login")); ?>
	</div>-->
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>