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

 
    <meta charset="utf-8">
    <title>Rating</title>
      <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 


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
  
  
  <style>
    form {
      /* display: flex; */
      flex-direction: column;
      gap: 10px;
    }

    .star-rating {
		
 direction: rtl;

      /* justify-content: flex-end; */
    }

    .radio-input {
      position: fixed;
      opacity: 0;
      pointer-events: none;
    }

    .radio-label {
      cursor: pointer;
      font-size: 0;
      color: rgba(0, 0, 0, 0.2);
      transition: color 0.1s ease-in-out;
    }

    .radio-label:before {
      content: "★";
      display: inline-block;
      font-size: 32px;
    }


    .radio-input:checked~.radio-label {
      color: #ffc700;
      color: gold;
    }

    .radio-label:hover,
    .radio-label:hover~.radio-label {
      color: goldenrod;
    }

    .radio-input:checked+.radio-label:hover,
    .radio-input:checked+.radio-label:hover~.radio-label,
    .radio-input:checked~.radio-label:hover,
    .radio-input:checked~.radio-label:hover~.radio-label,
    .radio-label:hover~.radio-input:checked~.radio-label {
      color: darkgoldenrod;
    }

    .average-rating {
      position: relative;
      appearance: none;
      color: transparent;
      width: auto;
      display: inline-block;
      vertical-align: baseline;
    }


    .average-rating::before {
      --percent: calc(4.3/5*100%);
      content: '★★★★★';
      position: absolute;
      top: 0;
      left: 0;
      color: rgba(0, 0, 0, 0.2);
      background:
        linear-gradient(90deg, gold var(--percent), rgba(0, 0, 0, 0.2) var(--percent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
  
  
    <script>  
function validateform(){  
var uname=document.myform.uname.value;  
var phn=document.myform.phn.value;  

var msg=document.myform.msg.value; 
if (uname==null || uname==""){  
  alert("Uname can't be blank");  
  return false;  
}
else if (phn==null || phn==""){  
  alert("Phn no can't be blank");  
  return false;  
}  

else if (msg==null || msg==""){  
  alert("Message can't be blank");  
  return false;  
}   
}  
</script> 

    </head>

<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">
     <?php
	 include("header.php");
	 ?>
    </div>
	</div>
	
	 <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2 style= "color:#6E260E;">
                  Feedback Form
                </h2>
              </div>
              <form method="post" name="myform" action= "form_info.php" onsubmit="return validateform()" >
                <div>
                  <input type="text" name="uname" placeholder="Full Name " />
                </div>
                <div>
                  <input type="text" name="phn"placeholder="Phone number" />
                </div>
                
               <div class="textarea">
            <textarea cols="60" rows="5" name="msg" placeholder="Describe your experience.."></textarea>
          </div>
		  
		  
		 <!-- rating -->

              <div class="star-rating">
                <input class="radio-input" type="radio" id="star5" name="rating" value="5" />
                <label class="radio-label" class for="star5" title="5 stars">5 stars</label>

                <input class="radio-input" type="radio" id="star4" name="rating" value="4" />
                <label class="radio-label" for="star4" title="4 stars">4 stars</label>

                <input class="radio-input" type="radio" id="star3" name="rating" value="3" />
                <label class="radio-label" for="star3" title="3 stars">3 stars</label>

                <input class="radio-input" type="radio" id="star2" name="rating" value="2" />
                <label class="radio-label" for="star2" title="2 stars">2 stars</label>

                <input class="radio-input" type="radio" id="star1" name="rating" value="1" />
                <label class="radio-label" for="star1" title="1 star">1 star</label>
              </div>
		  
		    <!-- end rating -->
		  
		
		  
		  
               <div class="d-flex ">
                  <input type="submit" class="btn btn-primary" value="POST"  />
                    
                  
                </div>
              </form>
            </div>
          </div>
   <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">

              <img src="images/bakery.jpg" alt= "bakery"  width="500px"/>
            
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->
	
	
   
<div class= "inner_part">

  
   
 




      
	  
  </div>
  <!-- footer section -->
  <?php
include("footer.php");
    ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
 <!-- <!-- <script src="js/bootstrap.js"></script> -->-->
  <!-- slick slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>