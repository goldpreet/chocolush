<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$cake_type=$_POST['cake_type'];
$fill_type=$_POST['fill'];
$shape=$_POST['shape'];
$icing=$_POST['icing'];
$flavour=$_POST['flavour'];
$serve=$_POST['serve'];
$allergy=$_POST['allergy'];
$request=$_POST['request'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$name=$f_name.' '.$l_name;
$email=$_POST['email'];
$add1=$_POST['address1'];
$add2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$number=$_POST['number'];
$photo="pic";

$address = serialize(array("add1"=>"$add1", "add2"=>"$add2", "city"=>"$city", "state"=>"$state", "zip"=>"$zip"));
print_r($address);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `orders`(`cake`, `filling`, `shape`, `icing`, `flavours`, `qty`, `allergies`, `requests`, `photos`, `name`, `email`, `address`, `phone`) VALUES ('$cake_type','$fill_type','$shape','$icing','$flavour','$serve','$allergy','$request','$photo','$name','$email','$address','$number')";
if (mysqli_query($conn, $sql)) {
	 $last_id = mysqli_insert_id($conn);
	 
   if(isset($_FILES['im'])){

	$errors= array();
      $file_name = $_FILES['im']['name'];
      $file_size =$_FILES['im']['size'];
      $file_tmp =$_FILES['im']['tmp_name'];
      $file_type=$_FILES['im']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['im']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if(empty($errors)==true){
		  $image_name="$last_id.$file_ext";
         move_uploaded_file($file_tmp,"img/"."$last_id.$file_ext");
         
		 $x="UPDATE `orders` SET `img`='$image_name' WHERE `oid`='$last_id'";
		 if(mysqli_query($conn, $sql))
		 {
		//	echo $last_id;die;
			header("location:form.php?success=1");  		 
		 }else{
		 header("location:form.php?error=1"); 
	//	 mysqli_error($conn);die;
		 }
	}else{
      //   print_r($errors);
		 header("location:form.php?error=1"); 
      }
   }



} else {
header("location:form.php?error=1"); 
}

mysqli_close($conn);
?>