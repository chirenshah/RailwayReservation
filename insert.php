<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "train";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name= $_POST['name'];
$email= $_POST['email'];
$usern= $_POST['usern'];
$pass= $_POST['pass'];
$phone= $_POST['phone'];
$aadhar= $_POST['aadhar'];
$sql = "INSERT INTO `user` (`Name`, `E-mail`, `Username`, `Password`, `Phone`, `Adhar`) VALUES ('$name','$email', '$usern', '$pass', '$phone', '$aadhar')";
$result = $conn->query($sql);
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:login.php");
?>
