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
                  <li><a href="#"><i class="fa fa-home"></i>education Information Post</a></li>
                </ol>
                <div class="col-md-12">
                	<form class="form-horizontal" action="process/education-information-process.php" method="post" enctype="multipart/form-data">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Add education Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="education-information-table.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>Manage education Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">


                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Duration</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Duration" name="time">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">School/Collage/University Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="School/Collage/University Name" name="inst_name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Degree</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="Degree" name="degree">
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