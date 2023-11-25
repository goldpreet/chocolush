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

$sql = "SELECT * FROM `chocolates`";
$result = mysqli_query($conn, $sql);



?>


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
	 include("header.php");
	 ?>
    </div>
    <!-- chocolate section -->
	
	 <!-- chocolate section -->

    <section class="chocolate_section ">
      <div class="container">
        <div class="heading_container" id="choco_head">
          <h2 style="color: saddlebrown;">
            Our Chocolate Products
          </h2>
          <p style="color: orange; font-size:25px;">
		    Eat, Love, Repeat: Our Chocolate Mantra.
		    Celebrate Life's Sweet Moments with Our Irresistible Chocolates
            Discover Pure Happiness: Our Artisanal Chocolates Await
			Delicious Moments Wrapped in Every Chocolate.
          </p>
        </div>
      </div>
      <div class="container">
        <div class="chocolate_container">
<?php		
//print_r(mysqli_fetch_assoc($result));
		while($r = mysqli_fetch_assoc($result)){

	?>	
		
          <div class="box">
            <div class="img-box">
              <img src="images/<?=$r['image'];?>" alt="">
            </div>
            <div class="detail-box">
              <h6>
                <?=$r['choconame'];?> 
              </h6>
			  <p> <?=$r['description'];?> </p>
              <h5>
                <?=$r['price'];?>
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
		<?php } ?>
        </div>
      </div>
    </section>

    <!-- end chocolate section -->
    <!-- end chocolate section -->

    
	  
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

</body>

</html>