<?php
/* @var $this DoctordetailsController */
/* @var $model Doctordetails */

$this->breadcrumbs=array(
	'Doctordetails'=>array('index'),
	$model->doctordetailsid,
);

$this->menu=array(
	array('label'=>'List Doctordetails', 'url'=>array('index')),
	array('label'=>'Create Doctordetails', 'url'=>array('create')),
	array('label'=>'Update Doctordetails', 'url'=>array('update', 'id'=>$model->doctordetailsid)),
	array('label'=>'Delete Doctordetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doctordetailsid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctordetails', 'url'=>array('admin')),
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
                               <?php $userphoto = $model->photo; ?>
                              <?php  if ($userphoto != "") { ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/logos/<?php echo $model->photo; ?>" alt="" class="img-thumbnail user_avatar">
                                 <?php } else {   ?>
                            <img src="<?php echo yii::app()->request->baseurl; ?>/img/user_avatar_lg.png" alt="">
                                 <?php } ?>
                             </div>
                            <div class="col-sm-10">
                                <div class="user_heading_info">
                                    <h1> Dr.<?php echo $model->doctorname; ?></h1>
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
													<label class="col-sm-2 control-label">Doctor name</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo  $model->doctorname; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Hospital name</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->hospitalregistration->hospitalname; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Designation</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->doctordesignation->designation; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Specialization</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->doctorspecialization->specialization; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Doctor code</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->doctorcode; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Consultant fee</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->consultantfee; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                
                                                                                                 <div class="form-group">
													<label class="col-sm-2 control-label">Date of join</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->dateofjoin; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                 
                                                                                                
                                                                                                <h3 class="heading_a">Contact info</h3>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Shift type</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->drshift; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Address</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->address; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group">
													<label class="col-sm-2 control-label">Contact No</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->contactno; ?></p>
														<div class="hidden_control">
															<input type="text" class="form-control" value="">
														</div>
													</div>
												</div>
                                                                                                
                                                                                                
												
                                                                                                
                                                                                               
                                                                                               

                                                                                          </div>
                                                                                    </div>
                                                                                </div>
                                                                         </div>
                                                                   </div>
                        </section>


