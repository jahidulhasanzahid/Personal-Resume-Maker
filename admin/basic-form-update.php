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

                
                              <?php 
                                if(isset($_GET['edit'])){

                                $edit_id = $_GET['edit'];

                                $courseQuery = "SELECT * FROM `basic_information` where id='$edit_id'";

                                $runQuery = mysqli_query($con,$courseQuery);
                                    while($row=mysqli_fetch_array($runQuery)){
                                        $post_id = $row['id'];
                                        $photo = $row['photo'];
                                        $address = $row['address'];
                                        $email = $row['email'];
                                        $phone = $row['phone'];
                                        $objective = $row['objective'];
                                        $soft_knowledge = $row['soft_knowledge'];
                                        $language = $row['language'];
                                        $work = $row['work'];

                                  }
                                }

                                ?>
                                
            <div class="col-md-10 admin-part pd0">
              <ol class="breadcrumb">
                  <li><a href="basic-information.php"><i class="fa fa-home"></i>Basic Information Post</a></li>
                </ol>
                <div class="col-md-12">
                  <form class="form-horizontal" action="process/update-basic-information-process.php" method="post" enctype="multipart/form-data">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Edit Basic Information
                             </div>
                             <div class="col-md-3 text-right">
                              <a href="basic-information-table.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>Manage Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $post_id; ?>" name="id" style="visibility: hidden;" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-8">
                              <input type="file" class="form-control" value="<?php echo $photo; ?>" name="photo">
                            </div>
                        </div>
                          
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $address; ?>" name="address">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" value="<?php echo $phone; ?>" name="phone">
                            </div>
                          </div>


                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Objective</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $objective; ?>" name="objective">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Software Knowledge</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $soft_knowledge; ?>" name="soft_knowledge">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Language</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $language; ?>" name="language">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Work</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $work; ?>" name="work">
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