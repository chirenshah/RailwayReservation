<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "train";
	$from = $_SESSION["from"];
	$destination= $_SESSION["destination"];
	$type = $_REQUEST["checked"];
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
			if (!$conn) {
			    	die("Connection failed: " . mysqli_connect_error());
						}

			$sql = "SELECT * FROM train WHERE T_ID IN (SELECT T_ID FROM station where Name = '$from' INTERSECT SELECT T_ID FROM station where Name = '$destination') AND Type = '$type'";
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