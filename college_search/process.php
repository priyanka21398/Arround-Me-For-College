<?php

    include('db/db_utilities.php');// database connection 
	$link = new DB(); //object create 
    
	if(isset($_POST['register']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$district=$_POST['district'];
		
		$que="insert into register(email,password,name,mobile,district)value('$email','$password','$name','$mobile','$district')";
		$result=mysql_query($que);
		if($result)
		{
			echo '<script language="javascript">alert("Register Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	
	//Login 
	
	if(isset($_POST['admin']))
	{
		$uname = $_POST['email'];
		$pwd = $_POST['password'];
	
	
		$sql="select * from admin where email='$uname' and password='$pwd'";
		
		$res = mysql_query($sql);
		if($row = mysql_fetch_row($res))
		{
			session_start(); //session start
			ob_start();
		
			$_SESSION['username'] = $uname;
			
				
			echo "<script> window.location = 'home.php';</script>";
		}
		else
		{
			echo '<script language="javascript">alert("Incorrect Login details");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	//Add District
	if(isset($_POST['district']))
	{
		$district=$_POST['dist'];
		$in="insert into district(district)value('$district')";
		$result=mysql_query($in);
		if($result)
		{
			echo '<script language="javascript">alert("Add Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	//Add City
	if(isset($_POST['city']))
	{
		$district=$_POST['districts'];
		$city=$_POST['cityname'];
		$in="insert into city(district,city)value('$district','$city')";
		$result=mysql_query($in);
		if($result)
		{
			echo '<script language="javascript">alert("Add Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	
	//active
	if(isset($_GET['did']))
	{
		$uid=intval($_GET['did']);
		
		$up="update register set status='Active' where uid='$uid'";
		$result=mysql_query($up);
		if($result)
		{
			echo '<script language="javascript">alert("User Actived!");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	
	//User Login
	//Login 
	
	if(isset($_POST['login']))
	{
		$uname = $_POST['email'];
		$pwd = $_POST['password'];
	
	
		$sql="select * from register where email='$uname' and password='$pwd' and status='Active'";
		
		$res = mysql_query($sql);
		if($row = mysql_fetch_assoc($res))
		{
			ob_start();
			session_start(); //session start
			
			session_regenerate_id();
			
		    $_SESSION['uid'] = $row['uid'];
			$_SESSION['username'] = $uname;
			
				
			echo "<script> window.location = 'userhome.php';</script>";
		}
		else
		{
			echo '<script language="javascript">alert("Incorrect Login details");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	//Add College
	if(isset($_POST['clgadd']))
	{
		$district=$_POST['districts'];
		$colleg=$_POST['college'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$website=$_POST['website'];
		$about=$_POST['about'];
		$uid=$_POST['uid'];
		$city=$_POST['city'];
		$distance=$_POST['distance'];
		$location=$_POST['location'];
		$cate=$_POST['cate'];
		$cate_search=$cate.' in '.$city;
		$sql="insert into college(college,email,phone,mobile,address,website,about,district,uid,city,distance,location,cate,cate_search)value('$colleg','$email','$phone','$mobile','$address','$website','$about','$district','$uid','$city','$distance','$location','$cate','$cate_search')";
		$result=mysql_query($sql);
		if($result)
		{
			echo '<script language="javascript">alert("Add Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	//Update College
	//Add College
	if(isset($_POST['clgaddup']))
	{
		
		$colleg=$_POST['college'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$website=$_POST['website'];
		$about=$_POST['about'];
		$cid=$_POST['cid'];
		$distance=$_POST['distance'];
		$location=$_POST['location'];
		$sql="update college set college='$colleg',email='$email',phone='$phone',mobile='$mobile',address='$address',website='$website',about='$about',distance='$distance',location='$location' where cid='$cid'";
		$result=mysql_query($sql);
		if($result)
		{
			echo '<script language="javascript">alert("Update Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
	//Status Post
	if(isset($_GET['upstatus']))
	{
		$id=intval($_GET['upstatus']);
		
		$sql="update college set status='Posted' where cid='$id'";
		$result=mysql_query($sql);
		if($result)
		{
			echo '<script language="javascript">alert("Update Successfully");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
		else
		{
			echo '<script language="javascript">alert("Plz Try Again");location.href=\'' . $_SERVER['HTTP_REFERER'] . '\'</script>';
		}
	}
?>