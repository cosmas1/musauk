
<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 }
	else{
	 exit;
  }
   ?>
<?php include 'main.php';?>
<?php 
include('inc/dbcon.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/dt_bootstrap.css">

</head>
<body>
<section class="HomeKisii">
<img src="" alt="" style="width:954px;height:470px">


<div class="cont">
<br>
<br>
<center>
<form action="" method="POST">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
								 <th>NO.</th>
								 <th>REGISTRATION</th>
								 <th>TYPE</th>
								 <th>MODEL</th>
								 <th>STREET</th>
								 <th>PLOT</th>
								 <th>DATE & TIME IN</th>
								 <th>DATE & TIME OUT</th>
                                 <th>STATUS</th>
								 
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
								$no=0;
							$query=mysql_query("SELECT * FROM `zones`")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$status=$row['status'];
							$no=$no+1;
							?>
						
                                
										<tr>
										<td>
										</td>
										 <td><?php echo $no; ?></td>
										 <td><?php echo $row['platenumber'] ?></td>
										 <td><?php echo $row['vehicle'] ?></td>
										 <td><?php echo $row['model'] ?></td>
										 <td><?php echo $row['street'] ?></td>
										 <td><?php echo $row['plot'] ?></td> 
										 <td><?php echo $row['d1'] ?></td>
										 <td><?php echo $row['d2'] ?></td>
										 <td><?php echo $row['status'] ?></td>		  	 
										
                                </tr>
                         <?php  } ?>
						 
                            </tbody>
                        </table>
						
</form>
</center>
</div>


</section>
<section class="kisii-bottom">
<p>Safe & Reliable Parking, whenever you are in Nairobi CBD</p>
</section>
</body>
</html>
