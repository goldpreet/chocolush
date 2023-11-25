<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$uname=$_POST['uname'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$msg=$_POST['msg'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `contact`(`uname`,`email`, `phn`,  `msg`) VALUES ('$uname','$email','$phn','$msg')";

if (mysqli_query($conn, $sql)) {
  //header("location:form.php?success=1");  
} else {
//header("location:form.php?error=1"); 
}

mysqli_close($conn);
?>