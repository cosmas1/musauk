
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
</head>

<form class="box login" action="process-book-1.php" method="post">

	<fieldset class="boxBody">
	<label><strong>Describe your Vehicle</strong></label>
	<hr />
	  <label>Model</label>
	  <input type="text" tabindex="1" name="model" placeholder="eg. Mercedes Benz" required>
	  <label>Vehicle Type</label>
	   <select name="vehicle" class="cjComboBox" >
			<option>-Select-</option>
			<option value="car">Car</option>
			<option value="van">Van</option>
			<option value="pickup">Pick-up</option>
			<option value="bus">Bus</option>
			<option value="lorry">Lorry</option>
			<option value="trailer">Trailer</option>
			
			
			</select>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed" tabindex="4">
	  <?php
	  //Values
	  ?>
	</footer>
</form>
</html>
