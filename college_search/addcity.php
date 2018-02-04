<?php
include('db/db_utilities.php');// database connection 
	$link = new DB(); //object create
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
				include('header.php');
				?>
				
			</div>
			<div id="content">
				<h3>Add City</h3>
				<form action="process.php" method="POST" class="login">
					<table>
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
							<td><input type="text" name="cityname" required=""/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="city" value="Add"/></td>
							
						</tr>
					</table>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
