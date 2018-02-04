<?php
// you have to open the session first

session_start(); 
//remove all the variables in the session

if(isset($_SESSION['username']))
	{
		        session_unset(); 
                session_destroy();
                header("Location: index.php");
	}


?>
