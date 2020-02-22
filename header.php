
	<header>
		<div id="logo">
			<img src="src/logo.png" style="position:absolute;"/>
		</div>
		
		
		<?php 
			if(isset($_SESSION['phone']))
			{
			?>
			<div class="logged-in">
				<div>Username: <?php echo $_SESSION['phone']; ?> </div>
				<div><a href="profile.php">My Profile</a></div>
				<div><a href="proc/logout.php">Sign Out</a></div>
			</div>
			
			<?php
			} 
			else
			{
			?>	
			<button class="create_account">Create Account</button>
				<section class="log-form">
		<form class="log-in" action="proc/login.php" method="POST">
			<input type="text" name="phone" value="" />
			<input type="password" name="password" value="" />
			<input type="Submit" name="Submit" value="Log In" />
			<br />
			<p>PHONE</p><p>Password</p>
		</form>
		</section>
			<?php	
			}  
			?>
			</header>