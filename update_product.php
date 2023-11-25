
				  
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
$chocoid=$_GET['chocoid'];
$sql = "SELECT* FROM chocolates where chocoid='$chocoid' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
//echo $row['choconame'];die;
 ?>   
	


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

  


<!DOCTYPE html>
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

</head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
      <?php
	  include("header2.php");
	  ?>
    </div>


    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2 style= "color:#6E260E;">
                  Update Form
                </h2>
              </div>
              <form action= "update_product_details.php" method="POST">
                <div>
                  <input type="hidden" value="<?=$row['chocoid'];?>" name="chocoid" />
                  <input type="text" value="<?=$row['choconame'];?>" name="choconame" placeholder="Choco Name " />
                </div>
                <div>
                  <input type="text" value="<?=$row['description'];?>" name="description" placeholder="Description" />
                </div>
                <div>
                  <input type="text" value="<?=$row['price'];?>" name="price" placeholder="Price" />
                </div>
               
               <div class="d-flex ">
                  <input type="submit" class="btn btn-primary" value="Update"  />
                  
                    
                  
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6  px-0">
            <div class="map_container">
              
            </div>
          </div>
		  
        </div>
      </div>
    </section>

    <!-- end contact section -->


    

  </div>

  <!-- footer section -->
  <?php
include("footer.php");
    ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
 <!-- <script src="js/bootstrap.js"></script> -->
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>