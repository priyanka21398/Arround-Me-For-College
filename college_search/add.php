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
				<h3>Add District</h3>
				<form action="process.php" method="POST" class="login">
					<table>
						<tr>
							<td>District</td>
							<td><input type="text" name="dist" required=""/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="district" value="Add"/></td>
							
						</tr>
					</table>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>
