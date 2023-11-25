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
          
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
  
<style>
          table {
            border-collapse: collapse;
            width: 100%;
          }
          th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
          }
        </style><script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"> </script>
		<script src = "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
   
   
</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
      <?php
	  include("header2.php");
	  ?>
    </div>


    <!--order section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <div class="form_container">
             
				<div class="container">
				  <h2>Customer Table</h2>
				  
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

$sql = "SELECT* FROM orders";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
?>	  
  <table id = "car"><thead>
  <tr><th>sno</th><th>Customer name</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>phone</th></tr>
  </thead><tbody>
<?php
$count=1;
  while ($row = mysqli_fetch_assoc($result)) {
  $add=unserialize( $row["address"] );
 ?>   
	
		<tr><td><?=$count;?></td>
    <td><?=$row["name"];?></td>
    <td><?=$row["email"];?></td>
    <td><?=$add["add1"]." ".$add["add2"];?></td>
    <td><?=$add["city"];?></td>
    <td><?=$add["state"];?></td>
   <td><?=$row["phone"];?></td>
    
   </tr>
<?php  
  $count++;
  }
  ?></tbody>
</table>
<script>
      $(document).ready(function () {
         var table = $('#car').DataTable({
            "paging": true,
            
         });
      });
   </script>
<?php

mysqli_close($conn);
?>		  
				</div>


            </div>
          </div>
          
        </div>
      </div>
    </section>


     <!-- end select section -->

  </div>

  <!-- footer section -->
  <?php
include("footer.php");
    ?>
  <!-- footer section -->

  <!-- jQery -->
 <!-- <script src="js/jquery-3.4.1.min.js"></script>-->
  <!-- bootstrap js -->
<!--  <!-- <script src="js/bootstrap.js"></script> -->-->
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  
  <!-- End Google Map -->
<?php
}
?>
</body>
</html>