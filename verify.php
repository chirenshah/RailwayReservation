<?php 
	session_start();
?>
<?php
$entry="false";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "train";
$_SESSION['username'] = $_POST["uname"];
$uname= $_POST["uname"];
$_SESSION['password'] = $_POST["pass"];
$pass = $_POST["pass"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user where Username='$uname' && Password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   header("Location:passenger.php");
    }
else {
    header("Location:login.php");
}
mysqli_close($conn);
?>