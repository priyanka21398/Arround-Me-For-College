
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
			<h3>College Details</h3><br/>
			<div class="tablede">
			<table>
				<tr>
					<th>College Name</th>
					<th>Email ID</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Location</th>
					<th>Distance</th>
					<th>Status</th>
					<th>Link</th>
				</tr>
				<?php
				$sql="select * from college where uid='$uid'";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<tr>
					<td><?php echo $row['college'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['mobile'] ?></td>
					<td><?php echo $row['address'] ?></td>
					<td><?php echo $row['location'] ?></td>
					<td><?php echo $row['distance'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td><a href="upcollege.php?cid=<?php echo $row['cid'] ?>">Update</a></td>
				</tr>
				<?php	
				}
				?>
			</table>
			</div>
			</div>
			
		</div>
	</div>
</body>
</html>
