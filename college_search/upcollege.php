<?php
session_start();
 include('db/db_utilities.php');// database connection 
	$link = new DB(); //object create
	$uid=$_SESSION['uid'];
	
	$cid=intval($_GET['cid']);
	 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Around me for College</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="site">																																																					
		<div id="wrapper">
			<div id="header">
				<?php
				include('uheader.php');
				?>
				
			</div>
			<div id="content">
			<h3>Update College</h3><br/>
				<form action="process.php" method="post" class="login">
				<input type="hidden" name="cid" value="<?php echo $cid ?>"/>
					<table>
						<?php
						$sql="select * from college where cid='$cid'";
						$result=mysql_query($sql);
						while($row=mysql_fetch_assoc($result))
						{
						?>
						
						<tr>
									<td>College Name</td>
									<td><input type="text" name="college" value="<?php echo $row['college'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>Email ID</td>
									<td><input type="text" name="email" value="<?php echo $row['email'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>Phone Number</td>
									<td><input type="text" name="phone" value="<?php echo $row['phone'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>Mobile Number</td>
									<td><input type="text" name="mobile" value="<?php echo $row['mobile'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>Address</td>
									<td><textarea cols="30" rows="4"  name="address"><?php echo $row['address'] ?></textarea></td>
						</tr>
						<tr>
									<td>Website</td>
									<td><input type="text" name="website" value="<?php echo $row['website'] ?>" placeholder="http://www.example.com" required=""/></td>
						</tr>
						<tr>
									<td>Location</td>
									<td><input type="text" name="location" value="<?php echo $row['location'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>Distance</td>
									<td><input type="text" name="distance" value="<?php echo $row['distance'] ?>" required=""/></td>
						</tr>
						<tr>
									<td>About Us</td>
									<td><textarea cols="60" rows="6" name="about"><?php echo $row['about'] ?></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="clgaddup" value="Update"/></td>
						</tr>
						<?php	
						}
						?>
					</table>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
