<?php
session_start();
 include('db/db_utilities.php');// database connection 
	$link = new DB(); //object create
	$uid=$_SESSION['uid'];
	 
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
			<h3>Add College</h3><br/>
				<form action="process.php" method="post" class="login">
				<input type="hidden" name="uid" value="<?php echo $uid ?>"/>
					<table>
					<tr>
							<td>Category</td>
							<td><select name="cate" required="">
								<option value="">Select Category</option>
								<option value="arts and science colleges">Arts & Science Colleges</option>
								<option value="ayurveda colleges">Ayurveda Colleges</option>
								<option value="catering and hotel mgmt colleges">Catering & Hotel Mgmt. Colleges</option>
								<option value="dental colleges">Dental Colleges</option>
								<option value="engineering colleges">Engineering Colleges</option>
								<option value="nursing colleges">Nursing Colleges</option>
								<option value="pharmacy colleges">Pharmacy Colleges</option>
								<option value="homoeopathy colleges">Homoeopathy Colleges</option>
								<option value="management colleges">Management Colleges</option>
								<option value="medical colleges">Medical Colleges</option>
								<option value="occupational therapy colleges">Occupational Therapy Colleges</option>
								<option value="physiotherapy colleges">Physiotherapy Colleges</option>
								<option value="polytechnic colleges">Polytechnic Colleges</option>
								<option value="siddha colleges">Siddha Colleges</option>
								<option value="teacher education colleges">Teacher Education Colleges</option>
								
							</select></td>
						</tr>
						<tr>
							<td>District</td>
							<td><select name="districts" required="">
								<option value="">Select District</option>
								<?php
								$sql="select * from district";
								$result=mysql_query($sql);
								while($row=mysql_fetch_assoc($result))
								{
								?>
								<option value="<?php echo $row['district'] ?>"><?php echo $row['district'] ?></option>
								<?php	
								}
								?>
							</select></td>
						</tr>
						<tr>
							<td>City</td>
							<td><select name="city" required="">
								<option value="">Select City</option>
								<?php
								$sql="select * from city";
								$result=mysql_query($sql);
								while($row=mysql_fetch_assoc($result))
								{
								?>
								<option value="<?php echo $row['city'] ?>"><?php echo $row['city'] ?></option>
								<?php	
								}
								?>
							</select></td>
						</tr>
						<tr>
									<td>Distance</td>
									<td><input type="text" name="distance" required=""/></td>
						</tr>
						<tr>
									<td>College Name</td>
									<td><input type="text" name="college" required=""/></td>
						</tr>
						<tr>
									<td>Email ID</td>
									<td><input type="text" name="email" required=""/></td>
						</tr>
						<tr>
									<td>Phone Number</td>
									<td><input type="text" name="phone" required=""/></td>
						</tr>
						<tr>
									<td>Mobile Number</td>
									<td><input type="text" name="mobile" required=""/></td>
						</tr>
						<tr>
									<td>Address</td>
									<td><textarea cols="30" rows="4" name="address"></textarea></td>
						</tr>
						<tr>
									<td>Website</td>
									<td><input type="text" name="website" placeholder="http://www.example.com" required=""/></td>
						</tr>
						<tr>
									<td>Location</td>
									<td><input type="text" name="location" required=""/></td>
						</tr>
						<tr>
									<td>About Us</td>
									<td><textarea cols="60" rows="6" name="about"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="clgadd" value="Add"/></td>
						</tr>
					</table>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
