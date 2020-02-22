<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<script src="mootools-core.js" type="text/javascript"></script>
	<script src="mootools-more.js" type="text/javascript"></script>
	<script src="Source/Locale.en-US.DatePicker.js" type="text/javascript"></script>
	<script src="Source/Picker.js" type="text/javascript"></script>
	<script src="Source/Picker.Attach.js" type="text/javascript"></script>
	<script src="Source/Picker.Date.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link href="style.css" rel="stylesheet" />
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>

<!--form starts-->
<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>Recommended Regions For You</label>
	   <select name="street" class="cjComboBox" >
			<option>-Select region-</option>
			<option value="MARKET STREET">METRO PARKING - PSV Only</option>
			<option value="TOTAL FILLING STATION ZONE">NAIROBI HILL ESTATE - Privates Only</option>
			<option value="POLICELINE STREET">KEMU TOWERS  - Heavy trucks Only</option>
			<option value="IDP STREET">LOITA STREET- Lorries and Pick-ups</option>
			<option value="SIRIBA STREET"> INTERCONTINENTAL HOTEL - Cars Only</option>
			<option value="NOV SUPERMARKET STREET">AMBASSADEUR PARKING-  Buses and Vans</option>
		</select>
		
		<select name="plot" class="cjComboBox">
			<option>-Select plot of choice-</option>
			<option value="PL 001">PL 001</option>
			<option value="PL 002">PL 002</option>
			<option value="PL 003">PL 003</option>
			<option value="PL 004">PL 004</option>
			<option value="PL 005">PL 005</option>
			<option value="PL 006">PL 006</option>
			<option value="PL 007">PL 007</option>
			<option value="PL 008">PL 008</option>
			<option value="PL 009">PL 009</option>
			<option value="PL 010">PL 010</option>
			<option value="PL 011">PL 011</option>
			<option value="PL 012">PL 012</option>
			<option value="PL 013">PL 013</option>
			<option value="PL 014">PL 014</option>
			<option value="PL 015">PL 015</option>
			<option value="PL 016">PL 016</option>
			<option value="PL 017">PL 017</option>
			<option value="PL 018">PL 018</option>	
		</select>
		
	<label>Plate Number:</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. KCA 123A" required>
	  
	<label><strong>Billing Information</strong></label>
	<hr />
	<label>Enter Credit Card Number:</label>
	<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="13"/> 
	 
	   <label>Parking fee: Ksh. 150/- per Hour Non-Refundable</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
<!--form ends-->
</html>
