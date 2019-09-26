<?php
  include("config/connect.php");
  include("config/session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("include/header.php"); ?>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
              
              <?php include("include/nav.php"); ?>

            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i>Basic Information Post</a></li>
                </ol>
                <div class="col-md-12">
                	<form class="form-horizontal" action="process/basic-information-process.php" method="post" enctype="multipart/form-data">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Add Basic Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="basic-information-table.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>Manage Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-8">
                              <input type="file" class="form-control" placeholder="" name="photo">
                            </div>
                        </div>


                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Full Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Present Address" name="address">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" placeholder="Mobile Number" name="phone">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Website</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Your Website" name="website">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Facebook Link</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="facebook url" name="facebook">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Twitter Link</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="twitter url" name="twitter">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">github</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="github" name="github">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Objective</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Objective" name="objective">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Software Knowledge</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Software Knowledge" name="soft_knowledge">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Language</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Language" name="language">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Work</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Work Title" name="work">
                            </div>
                          </div>
                          
                          <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input type="submit" id="btn-login" class="btn btn-success" name="submit" value="Upload">
                                </div>
                            </div> 
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <?php include("include/footer.php"); ?>
  </body>
</html>