<?php


session_start();
if(!isset($_SESSION['id']))
{
header("location:index.php");
}


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

</html><!DOCTYPE html>
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



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chocolate radioes</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
	
	<style>
	h3
	{
		color:#7F4E52;
	}
	



		
	</style>
</head>

<body>
<!-- FORM -->

    <!-- main div -->
    <div class="main-div">
    <div class="image " style="display:flex; justify-content:center;">
        <img src="images/cupcakes.png" alt="cupcakes" style="width:520px; "/> 
    </div>
    
    <div>
    <h1 align="center" style="color:#00A36C">Custom Cake Order Form</h1>
	<?php
	if(isset($_GET['success'])){
	echo"<div class='alert alert-success'>  
    <strong>Success!</strong> Your order is successfully booked.  
  </div> ";
	}
	if(isset($_GET['error'])){
	echo"<div class='alert alert-danger'>  
    <strong>Error!</strong> Your order is not booked.
  </div> ";
	}
	?>
	
	
	
	
	
   </div>
</div>
<form action="book_order.php" method="post" enctype="multipart/form-data" >
    <!-- first div -->
    <div class="container" >
        <div class="row" >
            <div class="col-md-6 " >



                <h3> Choose a Cake</h3>


                <div class="row" >
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="cake_type" value="chocolate" class="form-check-input" />
                            Chocolate
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="cake_type" value="red-velvet" class="form-check-input" />
                             Red Velvet
                        </label>
                    </div>
                </div>
               
                <div class="row ">  
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio"  name="cake_type" value="butterscotch" class="form-check-input" />
                            Butterscotch
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio"  name="cake_type" value="vanilla" class="form-check-input" />
                            Vanila
                        </label>
                    </div>
                </div>
            </div>
            <div class="col- md-6"  > 



                <h3> Choose a Filling</h3>


                <div class="row">
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="fill" value="chocolate" class="form-check-input" />
                            Chocolate
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="fill" value="buttercream" class="form-check-input" />
                            Buttercream
                        </label>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="fill" value="cheesecream" class="form-check-input" />
                            Cheese cream
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check">
                            <input type="radio" name="fill" value="vanilla"class="form-check-input" />
                            Vanilla
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- second div -->
<div class="container" >
    <div class="row" >
        <div class="col-md-6 " >



            <h3> Shape </h3>

            
            <div class="row" >
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" name="shape" value="circle" class="form-check-input" />
                        Circle
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" name="shape" value="square" class="form-check-input" />
                         Square
                    </label>
					
                </div>
            </div>
           
            <div class="row ">  
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" name="shape" value="rectangle" class="form-check-input" />
                         Rectangle
                    </label>
					</div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio"  name="shape" value="rspecial" class="form-check-input" />
                       Special
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6"  > 



            <h3> Choose a Icing</h3>


            <div class="row">
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Chocolate" name="icing" class="form-check-input" />
                        Chocolate
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Buttercream" name="icing" class="form-check-input" />
                        Buttercream
                    </label>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Cheese cream" name="icing" class="form-check-input" />
                        Cheese cream
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Vanilla" name="icing"  class="form-check-input" />
                        Vanilla
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- third div -->


<div class="container" >
    <div class="row" >
        <div class="col-md-6 " >



            <h3> Choose flavours </h3>

            
            <div class="row" >
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Chocolate" name="flavour" class="form-check-input" />
                        Chocolate
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="red-velvet" name="flavour" class="form-check-input" />
                         Red Velvet
                    </label>
                </div>
            </div>
           
            <div class="row ">  
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio" value="Butterscotch" name="flavour" class="form-check-input" />
                        Buttersctoch
                    </label>
                </div>
                <div class="col-md-6">
                    <label class="form-check">
                        <input type="radio"value="Vanilla" name="flavour" class="form-check-input" />
                        Vanilla
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6"  > 



            <h3>Number of servings</h3>

				<div class="col-md-6">
                    <label class="form-check">
                        <input type="number" class="form-check-input" name="serve" placeholder="" min="1" max="10" />
                       
                    </label>
                </div>
          
            
		</div>
		
</div>
</div>

<!-- fourth div -->



<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >


				<h3> Do you have any allergies? </h3>


            
            <div class="row" >

            

				<div class="col-md-6">
                  
                        <label for="">  </label>
                        

<textarea id="allergy" name="allergy" rows="4" cols="50">

</textarea>
                </div>
          
</div>
		</div>
        </div>
		</div>
		
		
		<!-- fifth div -->



<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >


				<h3> Special Requests </h3>


            
            <div class="row" >

            

				<div class="col-md-6">
                  
                        <label for="">  </label>
                        

<textarea id="request" name="request" rows="4" cols="50">

</textarea>
                </div>
          
            
		</div>
        </div>
		</div>
		</div>

<!-- sixth div -->

<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >


				<h3>Photo or sketch of the cake </h3>


            
            <div class="row"  style="border:1px dotted red; padding:20px;">

            

				<div class="col-md-6">
                  
                        <label for="image">Select a file:</label>
                          <input type="file" id="image" name="im">
                </div>
          
            
		</div>
        </div>
		</div>
		</div>



<!-- seventh div -->

<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >



<h3> Name</h3>
            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="f_name" placeholder="firstname">
							<label for="name">First Name</label>
                </div>
          
            
		</div>
        </div>
        <div class="col-md-6"  > 

<h3>&nbsp; </h3>


           

				<div class="col-md-6">
                  
                         <input type="text"  name="l_name" placeholder="lastname">
							<label for="name">Last Name</label>
                </div>
          
            
		</div>
		
</div>
</div>

<!-- eight div -->
<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >



<h3> Email </h3>
            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="email" placeholder="@gmail.com">
							<label for="Email">example@example.com</label>
                </div>
          
            
		</div>
        </div>
		</div>
		</div>
		
<!-- ninth div -->

<div class="container" >

    <div class="row" >

	
        <div class="col-md-12" >



<h3> Address</h3>
            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="address1" placeholder="" style=" width:70vw;">
						 <br/>
							<label for="Address1">Street Address</label>
                </div>
          
            
		</div>
        </div>
	</div>
</div>
<!-- tenth div -->
        

<div class="container" >

    <div class="row" >

	
        <div class="col-md-12" >




            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="address2" placeholder="" style=" width:70vw;">
						 <br/>
							<label for="Address">Street Address Line2</label>
                </div>
          
            
		</div>
        </div>
</div>
</div>
		
		<!-- eleventh div -->
		
		<div class="container" >

    <div class="row" >

	
        <div class="col-md-6 " >




            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="city" placeholder="Sri Ganganagar">
						 <br/>
							<label for="adress">City</label>
                </div>
          
            
		</div>
        </div>
        <div class="col-md-6"  > 




           

				<div class="col-md-6">
                  
                         <input type="text"  name="state" placeholder="Rajathan">
							<label for="address">State/Province</label>
                </div>
          
            
		</div>
		
</div>
</div>
		
		
		<!--twelfth	 div -->
		
		<div class="container" >

    <div class="row" >

	
        <div class="col-md-12" >




            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="text"  name="zip" placeholder="335001" style=" width:70vw;">
						 <br/>
							<label for="zip">Postal/Zip code</label>
                </div>
			</div>
            
		</div>
        </div>
		
		
	</div>	
	
	
		<!-- thirteenth div -->
		
	
		
	<div class="container" >

    <div class="row" >

	
        <div class="col-md-6" >


<h3> Phone Number </h3>

            
            <div class="row" >

            

				<div class="col-md-6">
                  
                         <input type="number"  name="number" placeholder="000-000-0000"  min="0" style=" width:30vw; ">
						 <br/>
							<label for="number"></label>
                </div>
			</div>
            
		</div>
        </div>
		
		
	</div>	
	
	
	<!-- fourteenth div -->
<div class="container" >

    <div class="row" >

	
        <div class="col-md-12" >




            
            <div class="row" >

            

				<div class="col-md-12 text-center" style=" margin-bottom:40px;">
                  
                       <button type="submit" class="btn btn-warning" role="button" data-bs-toggle="button" >Submit</button>
                </div>
			</div>
            
		</div>
    </div>
		
		
</div>

	</form>
	
	

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</div>
 <!-- footer section -->
  <?php
include("footer.php");
    ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <!-- <!-- <script src="js/bootstrap.js"></script> --> -->
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>