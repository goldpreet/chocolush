<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$subscribe=$_POST['subscribe'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `subscribe`( `semail`) VALUES ('$subscribe')";

if (mysqli_query($conn, $sql)) {
  //header("location:form.php?success=1");  
} else {
//header("location:form.php?error=1"); 
}

mysqli_close($conn);
?>