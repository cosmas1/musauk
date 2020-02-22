
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Car Parking</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center>NAIROBI CBD PARKING SYSTEM</center></p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
		
        <li class="dropdown">
          <a>Our Services</a>
          <ul>
		   <li><a href="about.php">About Us</a></li> 
            <li><a href="online-booking.php">Online Booking</a></li>
            <li><a href="on-street-booking.php">On-street Parking</a></li>
			<li><a href="off-street-parking.php">Off-street Parking</a></li>
            <li><a href="payment-methods.php">Payment Methods</a></li>
			<li><a href="security.php">Security</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="">Parking Zones</a>
          <ul class="large">
            <li><a href="region-1.php">METRO PARKING - PSV Only</a></li>
			<li><a href="region-2.php">NAIROBI HILL ESTATE - Privates Only</a></li>
			<li><a href="region-3.php">KEMU TOWERS  - Heavy trucks Only</a></li>
            <li><a href="region-4.php">LOITA STREET- Lorries and Pick-ups</a></li>
			<li><a href="region-5.php">INTERCONTINENTAL HOTEL - Cars Only</a></li>
            <li><a href="region-6.php">AMBASSADEUR PARKING-  Buses and Vans</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Reserve</a></li>";
   }
   else
   {
    echo "<li><a href=\"admin/index.php\">Admin Panel</a></li>";
   }
    ?>
     <li><a href="report.php">Parking Reports</a></li>
		<!--<li><a href="unbook.php">Unbook</a></li> -->
       
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>