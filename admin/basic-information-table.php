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
                  <li><a href="#"><i class="fa fa-home"></i>Manage Information</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Basic Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="form.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Photo</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Objective</th>
                                        <th>Software Knowledge</th>
                                        <th>Language</th>
                                        <th>Work</th>
                                    </tr>
                                    
                            	</thead>
                              <?php 

                                $courseQuery = "SELECT * FROM `basic_information` order by 1 DESC";

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

                                ?>
                                <tbody>
                                	<tr>
                                        <td><img src="images/<?php echo $photo; ?>" width="70" height="70"></td>
                                    	  <td><?php echo $address; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $objective; ?></td>
                                        <td><?php echo $soft_knowledge; ?></td>
                                        <td><?php echo $language; ?></td>
                                        <td><?php echo $work; ?></td>
                                        
                                        <td>
                                            <a href="basic-form-update.php?edit=<?php echo $post_id; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a href="process/delete.php?del=<?php echo $post_id; ?>"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                <?php } ?>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <?php include("include/footer.php"); ?>
  </body>
</html>