<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$chocoid=$_POST['chocoid'];
$choconame=$_POST['choconame'];
$description=$_POST['description'];
$price=$_POST['price'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE `chocolates` SET `choconame`='$choconame',`description`='$description', `price`='$price' WHERE chocoid='$chocoid'";

if (mysqli_query($conn, $sql)) {
  header("location:products.php");  
} else {
echo mysqli_error($conn);
header("location:products.php"); 
}

mysqli_close($conn);


?>