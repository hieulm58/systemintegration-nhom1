<?php
/* @var $this HospitalregistrationController */
/* @var $model Hospitalregistration */

$this->breadcrumbs=array(
	'Hospitalregistrations'=>array('index'),
	$model->hospitalregistrationid,
);

$this->menu=array(
	array('label'=>'List Hospitalregistration', 'url'=>array('index')),
	array('label'=>'Create Hospitalregistration', 'url'=>array('create')),
	array('label'=>'Update Hospitalregistration', 'url'=>array('update', 'id'=>$model->hospitalregistrationid)),
	array('label'=>'Delete Hospitalregistration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->hospitalregistrationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hospitalregistration', 'url'=>array('admin')),
);
?>

<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid//index.php/core/hospitalregistration/create">Hospitals</a></li>
            <li><span>View Details</span></li>						
        </ul>
    </div>
</section>              
<section class="container clearfix main_section">
    <div id="main_content_outer" class="clearfix">
        <div id="main_content">

            <!-- main content -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="user_heading">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                               <?php $userphoto = $model->logo; ?>
                              <?php  if ($userphoto != "") { ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/logos/<?php echo $model->logo; ?>" alt="" class="img-thumbnail user_avatar">
                                 <?php } else {   ?>
                            <img src="<?php echo yii::app()->request->baseurl; ?>/img/user_avatar_lg.png" alt="">
                                 <?php } ?>
                             </div>
                            <div class="col-sm-10">
                                <div class="user_heading_info">
                                    <!--												<div class="user_actions pull-right">
                                                                                                                                            <a href="#" class="edit_form" data-toggle="tooltip" data-placement="top auto" title="Edit profile"><span class="icon-edit"></span></a>
                                                                                                                                            <a href="#" class="remove_user" data-toggle="tooltip" data-placement="top auto" title="Remove User"><span class="icon-remove"></span></a>
                                                                                                                                    </div>-->
                                    <h1><?php echo $model->hospitalname; ?></h1>
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user_content">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-2">
                                <form class="form-horizontal user_form">
                                    <h3 class="heading_a">General</h3>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Hospital name</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->hospitalname; ?></p>
                                            <!--														<div class="hidden_control">
                                                                                                                                                                    <input type="text" class="form-control" value="jSmith">
                                                                                                                                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->address; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Year of establishment</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->yearofestablishment; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->country; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">State</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->state; ?></p>

                                        </div>
                                    </div>
                                    <h3 class="heading_a">Contact info</h3>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Phone</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->phone; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->email; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Fax</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->fax; ?></p>

                                        </div>
                                    </div>

                                    <h3 class="heading_a">Other info</h3>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Number of Buildings</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->noofbuildings; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contact person</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->contactperson; ?></p>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Promoted by</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->promotedby; ?></p>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>                 