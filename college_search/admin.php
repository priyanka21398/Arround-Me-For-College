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
				<a href="index.php" id="logo"><img src="images/spacer.gif" alt="" width="360" height="90" /></a>																																																			
			  											
			    <div class="search"><span>Search</span><form action="search.php" method="post"> <input type="text" name="clgsearch" placeholder="Search Here" /><input type="submit" name="search" value="Search" style="width: 80px;margin: -20px 0px 0px 200px;"/></form></div>
				<ul id="menu">
					<li><a href="index.php" class="but1_active">Home</a></li>
					<li><a href="admin.php" class="but2">Admin</a></li>
					<li><a href="login.php" class="but2">Login</a></li>
				</ul>
				
				
			</div>
			<div id="content">
				<div id="sidebar">
					<h4>Location</h4>
					<br/>
					<form action="district_search.php" method="POST">
						<input type="text" name="city" placeholder="Enter the City"/>
						<input type="submit" name="" value="Submit"/>
					</form>
					
				</div>
				<div id="main">
					<h4>Admin Login</h4>
					
					<div >
						<form action="process.php" method="post" class="login">
							<table>
								<tr>
									<td>Email ID</td>
									<td><input type="text" name="email" required=""/></td>
								</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>
									<td>Password</td>
									<td><input type="password" name="password" required=""/></td>
								</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>&nbsp;</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="admin" value="Login"/></td>
									
								</tr>
							</table>
						</form>
					</div>
					
					
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>
