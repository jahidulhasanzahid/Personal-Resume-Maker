<?php include ("admin/config/connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1%2ch2.html');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->

    <?php

        $courseQuery = "SELECT * FROM `basic_information` order by 1 DESC";

        $runQuery = mysqli_query($con,$courseQuery);
          while($row=mysqli_fetch_array($runQuery)){
            $photo = $row['photo'];
            $name = $row['name'];
            $address = $row['address'];
            $email = $row['email'];
            $phone = $row['phone'];
            $website = $row['website'];
            $facebook = $row['facebook'];
            $twitter = $row['twitter'];
            $github = $row['github'];
            $objective = $row['objective'];
            $soft_knowledge = $row['soft_knowledge'];
            $language = $row['language'];
            $work = $row['work'];
            
    ?>

    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="admin/images/<?php echo $photo; ?>" alt="admin/images/<?php echo $photo; ?>" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php echo $name; ?></h1>
            <ul>
              <li class="ad"><?php echo $address; ?></li>
              <li class="mail"><?php echo $email; ?></li>
              <li class="tel">+88<?php echo $phone; ?></li>
              <li class="web"><?php echo $website; ?></li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download.pdf"><img src="images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' href="<?php echo $gitHub; ?>" title="My GitHub Profile"><img src="images/git.png" alt="" /></a></li>
              <li><a class='north' href="<?php echo $twitter; ?>" title="Follow me on Twitter"><img src="images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="<?php echo $facebook; ?>" title="My Facebook Profile"><img src="images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p><?php echo $objective; ?></p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <?php

        $courseQuery = "SELECT * FROM `education` order by 1 DESC";

        $runQuery = mysqli_query($con,$courseQuery);
          while($row=mysqli_fetch_array($runQuery)){
            $time = $row['time'];
            $inst_name = $row['inst_name'];
            $degree= $row['degree'];

        ?>
        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3><?php echo $time; ?></h3>
            <p>School/Collage/University: <?php echo $inst_name; ?><br />
              <em>Degree: <?php echo $degree; ?></em></p>
          </div>
        </div>
      <?php } ?>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <?php

        $courseQuery = "SELECT * FROM `experience` order by 1 DESC";

        $runQuery = mysqli_query($con,$courseQuery);
          while($row=mysqli_fetch_array($runQuery)){
            $time = $row['time'];
            $company_name = $row['company_name'];
            $position= $row['position'];
            $message = $row['message'];

        ?>
        <div class="entry">
          <h2>EXPERIENCE</h2>
          <div class="content">
            <h3><?php echo $time; ?></h3>
            <p>Company Name: <?php echo $company_name; ?><br />
              <em>Position: <?php echo $position; ?></em></p>
            <ul class="info">
              <em>★<?php echo $message; ?></em>
            </ul>
          </div>
        </div>
      <?php } ?>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Software Knowledge</h3>
            <ul class="skills">
              <li><?php echo $soft_knowledge; ?></li>
            </ul>
          </div>
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
              <li><?php echo $language; ?></li>
            </ul>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        <h2>WORKS</h2>
          <div class="content">
              <ul class="skills">
                <li><?php echo $work; ?></li>
              </ul>
            </div>
        </div>
      <?php } ?>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>

</html>
