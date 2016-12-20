<?php
$this->breadcrumbs=array(
	'Staffregistrations'=>array('index'),
	$model->staffregistrationid,
);

$this->menu=array(
	array('label'=>'List Staffregistration', 'url'=>array('index')),
	array('label'=>'Create Staffregistration', 'url'=>array('create')),
	array('label'=>'Update Staffregistration', 'url'=>array('update', 'id'=>$model->staffregistrationid)),
	array('label'=>'Delete Staffregistration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staffregistrationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staffregistration', 'url'=>array('admin')),
);
?>
<section id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php">Dashboard</a></li>
            <li><a href="<?php yii::app()->request->baseUrl; ?>/elixiraid/index.php/core/staffregistration/create">Staff Registration</a></li>
            <li><span>View Details</span></li>						
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
                               <?php $userphoto = $model->photo; ?>
                              <?php  if ($userphoto != "") { ?>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/logos/<?php echo $model->photo; ?>" alt="" class="img-thumbnail user_avatar">
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
                                    <p>  <h1><?php echo $model->firstname; ?>      <?php echo $model->lastname; ?></h1><h1> 
                                    <h2></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                          
                        <div class="row">
                              <div class="col-sm-10 col-sm-offset-2">
                                  <form class="form-horizontal user_form">
                                      <div class="user_content">
                          <h3 class="heading_a">General</h3>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">First name</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->firstname; ?></p>
                                            <!--														<div class="hidden_control">
                                                                                                                                                                    <input type="text" class="form-control" value="jSmith">
                                                                                                                                                            </div>-->
                                        </div>
                                    </div>
                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->lastname; ?></p>

                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->address ?></p>

                                        </div>
                                    </div>
                          <div class="form-group">
                                        <label class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->gender ?></p>

                                        </div>
                                    </div>
                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Age</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->age ?></p>

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
                                            <p class="form-control-static"><?php  ?></p>

                                        </div>
                                    </div>
                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Reference person</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->refereceperson; ?></p>

                                        </div>
                                    </div>
                            <div class="form-group">
                                        <label class="col-sm-2 control-label">Reference contact</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->referencecontact; ?></p>

                                        </div>
                                    </div>
                           <h3 class="heading_a">Other info</h3>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Date of Joining</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->dateofjoining; ?></p>

                                        </div>
                                    </div>
                            <div class="form-group">
                                        <label class="col-sm-2 control-label">Date of Retirement</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->dateofretiremnent; ?></p>

                                        </div>
                                    </div>
                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Employee type</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->employeetype->employeetypename; ?></p>

                                        </div>
                                    </div>
                           <div class="form-group">
                                        <label class="col-sm-2 control-label">Department</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->departmentname->departmentname; ?></p>

                                        </div>
                                    </div>
                             <div class="form-group">
                                        <label class="col-sm-2 control-label">Qualification</label>
                                        <div class="col-sm-10 editable">
                                            <p class="form-control-static"><?php echo $model->qualification; ?></p>

                                        </div>
                                    </div>
                                      
                                  </form>
                
                
                </div>
            </div>
        </div>
    </div></section>
