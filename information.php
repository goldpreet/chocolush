<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$choconame=$_POST['choconame'];
$description=$_POST['description'];
$price=$_POST['price'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `chocolates`( 'choconame', 'description', 'price') VALUES ('$choconame', '$description', 'price')";

if (mysqli_query($conn, $sql)) {
  //header("location:form.php?success=1");  
} else {
//header("location:form.php?error=1"); 
}

mysqli_close($conn);
?>