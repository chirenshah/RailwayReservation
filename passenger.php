<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="button.css">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 30px;
}

#customers tr{background-color:#FECE86
;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #322409;
  color: white;
}
body{
  background-color: #FEEEDC;
  color: #975102
}
.btn
{
border: none;
outline: none;
height: 40px;
background:#322409;
color: #fff;
font-size: 18px;
border-radius: 20px;
width: 100%
}
</style>
</head>
<body>
<h1 align="right">Hello <?php echo $_SESSION["username"] ?> </h1>
<table id="customers">
  <tr>
    <th>Name of Passenger</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Aadhar Card Number</th>
  </tr>
  <tr><form action="TxnTest.php" method="POST">
    <td>
        <input type="text" id="fname" name="Name" placeholder="Passenger 1"></td>
    <td>
        <input type="text" id="fname" name="Age" placeholder="Age"></td>
    <td>
        <input type="text" id="fname" name="Gender" placeholder="Gender"></td>
    <td>
        <input type="text" id="fname" name="Aadhar" placeholder="Aadhar Card Number"></td>
  </tr>
  <tr>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Passenger 2"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Age"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Gender"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Aadhar Card Number"></td>
  </tr>
  <tr>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Passenger 3"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Age"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Gender"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Aadhar Card Number"></td>
  </tr>
  <tr>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Passenger 4"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Age"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Gender"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Aadhar Card Number"></td>
  </tr>
  <tr>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Passenger 5"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Age"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Gender"></td>
    <td>
        <input type="text" id="fname" name="firstname" placeholder="Aadhar Card Number"></td>
  </tr>
</table>
<div class = "button-4">
<button type= "submit" class="eff-4">Submit</button></div>
</form>
</body>
</html>
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
$sql = "SELECT COUNT(*) FROM `Passengers` AS Count WHERE Name != ' ' ";
$result = $conn->query($sql)->fetch_array();
$_SESSION["count"] = $result[0];
mysqli_close($conn);
?>