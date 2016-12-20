<?php
/* @var $this DoctorspecializationController */
/* @var $model Doctorspecialization */

$this->breadcrumbs=array(
	'Doctorspecializations'=>array('index'),
	$model->doctorspecializationid,
);

$this->menu=array(
	array('label'=>'List Doctorspecialization', 'url'=>array('index')),
	array('label'=>'Create Doctorspecialization', 'url'=>array('create')),
	array('label'=>'Update Doctorspecialization', 'url'=>array('update', 'id'=>$model->doctorspecializationid)),
	array('label'=>'Delete Doctorspecialization', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->doctorspecializationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Doctorspecialization', 'url'=>array('admin')),
);
?>

<!--<h1>View Doctorspecialization #<?php // echo $model->doctorspecializationid; ?></h1>-->

<?php // $this->widget('zii.widgets.CDetailView', array(
//	'data'=>$model,
//	'attributes'=>array(
//		'doctorspecializationid',
//		'specialization',
//	),
//)); ?>
<section class="container clearfix main_section">
				<div id="main_content_outer" class="clearfix">
					<div id="main_content">
					<div class="col-sm-12">
								<div class="user_heading">
									<div class="row">
										<div class="col-sm-2 hidden-xs">
                                                                                
										</div>
										<div class="col-sm-10">
											<div class="user_heading_info">
<!--												<div class="user_actions pull-right">
													<a href="#" class="edit_form" data-toggle="tooltip" data-placement="top auto" title="Edit profile"><span class="icon-edit"></span></a>
													<a href="#" class="remove_user" data-toggle="tooltip" data-placement="top auto" title="Remove User"><span class="icon-remove"></span></a>
												</div>-->
												<h1><?php echo $model->specialization; ?></h1>
												
											</div>
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
													<label class="col-sm-2 control-label">specialization</label>
													<div class="col-sm-10 editable">
														<p class="form-control-static"><?php echo $model->specialization; ?></p>
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