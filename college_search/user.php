
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
			<h3>User Details</h3><br/>
			<div class="tablede">
			<table>
				<tr>
					<th>Email ID</th>
					<th>Name</th>
					<th>Mobile</th>
					<th>District</th>
					<th>Status</th>
					<th>Link</th>
				</tr>
				<?php
				$sql="select * from register";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<tr>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['mobile'] ?></td>
					<td><?php echo $row['district'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td><a href="process.php?did=<?php echo $row['uid'] ?>">Process</a></td>
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
