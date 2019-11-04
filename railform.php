<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="outline.css">
<style>
</style>
<div>
<h2>BOOK YOUR TICKET</h2>
<form action="second.php" method="POST">
  <p>From:</p>
<select class="drag" name="from">
  <option value="Kota Junction (KOTA)">Kota Junction (KOTA)</option>
  <option value="Ratlam Junction (RTM)">Ratlam Junction (RTM)
</option>
  <option value="Vadodara Junction (BRC)
">Vadodara Junction (BRC)
</option>
  <option value="Dadar">Dadar</option>
  <option value="Grant Road">Churchgate</option>
</select>
<br><p>To:<p>
<select class="drag" name="destination">
  <option value="Kota Junction (KOTA)">Kota Junction (KOTA)</option>
  <option value="Ratlam Junction (RTM)">Ratlam Junction (RTM)
</option>
  <option value="Vadodara Junction (BRC)">Vadodara Junction (BRC)
</option>
  <option value="Dadar">Dadar</option>
  <option value="Grant Road">Churchgate</option>
</select>
<br><br>
Date of Departure:
<br><input type="date" name="dod">
<a onclick="date"><i class="fa fa-calendar"></i></a>
<br><br>
Date of Arrival:
<br> <input type="date" name="doa">
<a onclick="date"><i class="fa fa-calendar"></i></a>
<br><br>
<input type="submit" name="city" value="submit">
<br><br>
</form>
</div>
</body>
</html>	
