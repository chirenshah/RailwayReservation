<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="secondstyle.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<?php $_SESSION["from"]= $_POST["from"];
    $_SESSION["destination"]= $_POST["destination"] ?>
</head>
<body>
<div class="header">
  <h1>INDIAN RAILWAY SYSTEM</h1>
</div>
<div class="topnav">
 <p><?php echo $_POST["from"]?></p>
	<p><?php echo $_POST["destination"]?></p>
	<p><?php echo $_POST["dod"]?></p>
	<p><?php echo $_POST["doa"]?></p>
</div>
<div class="rightcolumn" id="test">
	<div class="modal" id="login">
  		<link rel="stylesheet" type="text/css" href="style.css">
  		<body>
  		<div class="loginbox">
  			<img src="train.jpg" class="avatar">
  			<button type="button" class="cancel" onclick="document.getElementById('login').style.display='none'"><i class="fa fa-close" style="color:red;"></i></button>
  			<h1>Login Here</h1>
  			<form action="verify.php" method="POST">
				<p>Username</p>
				<input type="text" name="uname" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="pass" placeholder="Enter Password">
				<input type="submit"></button>
				<a href="signup.php">Don't have an account?</a>
			</form>
		  </div>
		</body>
  </div>
	<div id="test" class="card">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "train";
			$from = $_SESSION["from"];
			$destination= $_SESSION["destination"];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
			if (!$conn) {
			    	die("Connection failed: " . mysqli_connect_error());
						}

			$sql = "SELECT * FROM train WHERE T_ID IN (SELECT T_ID FROM station where Name = '$from' INTERSECT SELECT T_ID FROM station where Name = '$destination')";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    		// output data of each row
			    	while($row = mysqli_fetch_assoc($result)) {
			    		echo "<table><tr><th>Train Name</th><th>Class</th><th>Price</th>";
			        	echo "<tr><td>".$row["Type"]."</td><td>".$row["Class"]."</td><td>".$row["Tickets"]."</td><td>"?><input type="radio" name="Price" value="<?php echo $row['Tickets'];?>"></td><td><button onclick="validate()">Validate</button></td></tr>
			    		</table>
            <?php
			    	}
			}else {
			    	echo "0 results";
					}
			mysqli_close($conn);
			?>
		<br><br><button type="button" class="btn" onclick="login()">Login</button>
	</div>
</div>
  <div class="leftcolumn">
      <h2> Refine Results </h2>
      <h3>Train Types</h3>
      <form>
      <input type="radio" name="Type" value="SHATABDI"> SHATABDI<br>
      <input type="radio" name="Type" value="DURANTO"> DURANTO<br>
      <input type="radio" name="Type" value="ADI EXPRESS"> ADI EXPRESS<br><br>
      <h3>Journey Class</h3>
      <input type="radio" name="Class" value="ECONOMY CLASS"> ECONOMY CLASS<br>
      <input type="radio" name="Class" value="AC 2 TIER"> AC 2 TIER<br>
      <input type="radio" name="Class" value="AC 3 TIER" > AC 3 TIER<br><br>
      <h3>From Station</h3>
      <input type="radio" name="From" value="Kota Junction (KOTA)"> Kota Junction (KOTA)<br>
      <input type="radio" name="From" value="Ratlam Junction (RTM)">Ratlam Junction (RTM)<br>
      <input type="radio" name="From" value="DADAR" > DADAR<br><br>
      <h3>To Station</h3>
      <input type="radio" name="To" value="BORIVALI"> BORIVALI<br>
      <input type="radio" name="To" value="BANDRA"> BANDRA <br>
      <input type="radio" name="To" value="DADAR" > DADAR<br><br>
      </form>
      <button onclick="filter()">FILTER</button>
  </div>
</body>
<script src="myscripts.js"></script>
</html>