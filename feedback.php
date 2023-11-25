<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['id']))
{
header("location:index.php");
}


?>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ChocoLush</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/feedback.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
     <?php
	 include("header2.php");
	 ?>
    </div>
	
	
	<!-- feedback section -->
	
<div class="container" style="margin-top:100px;">
  <div class="row">
																																											<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT* FROM feedback";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
 ?> 
 
   
  <!--team-1-->
  <div class="col-lg-4">
  <div class="our-team-main">
  
  <div class="team-front">
  <img src="images/preet.png" alg="preet" width="300px" class="img-fluid" />
  <h3><?=$row['uname'] ?></h3>
  <p><?=$row['phn'] ?></p>
  </div>
  
  <div class="team-back">
  <span>
  <?=$row['msg']; ?>
  </span>
  </div>
  </div>
  </div>
  

	<?php
}
}
	?>
    <!-- end chocolate section -->

  </div>
  </div>		      
	  
  </div>
 <!-- footer section -->
  <?php
include("footer.php");
    ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <!--<!-- <script src="js/bootstrap.js"></script> -->-->
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>
</html>