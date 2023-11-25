<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chocolush";

$uname = $_POST['username'];
$pass = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM login WHERE username = '$uname' && password = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['id'] = $row['id'];
	//echo $_SESSION['id'];die;
	header("location:form.php");
} else {
	header("location:login.php");
}

mysqli_close($conn);
?>

