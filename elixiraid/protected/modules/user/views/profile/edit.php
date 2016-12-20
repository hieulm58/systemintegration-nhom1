<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->layout = '//layouts/main';
$this->breadcrumbs=array(
	UserModule::t("Profile")=>array('profile'),
	UserModule::t("Edit"),
);
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?><h1><?php echo UserModule::t('Edit profile'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>
<!--<div class="form-group">
                    <label class="col-sm-2 control-label"><?php //echo CHtml::encode($model->getAttributeLabel('Username')); ?></label>
                    <div class="col-sm-10 editable">
                        <p class="form-control-static"><?php //echo CHtml::encode($model->username); ?></p>-->
<div class="form-group">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

<!--	<p class="note"><?php //echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>-->

	<?php echo $form->errorSummary(array($model,$profile)); ?>

<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="form-group">
		<?php echo $form->labelEx($profile,$field->varname,array('class'=>'col-sm-2 control-label'));
		
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50,'class'=>'form-control'));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255),'class'=>'form-control'));
		}
		echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'username',array('class'=>'col-sm-2 control-label')); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'col-sm-2 control-label')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	     <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
		<?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save'),array('class'=>'btn btn-primary btn-lg')); ?>
	</div>
             </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
