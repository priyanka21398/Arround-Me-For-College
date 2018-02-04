<?php
class DB {
   function DB() {
       
   	   
	   
	   $this->host = "localhost";
       $this->db = "db_college_search";
       $this->user = "root";
       $this->pass = "";
	   
       $this->link = mysql_connect($this->host, $this->user, $this->pass) or die("Server connection failed. Please check your details.");	    
       mysql_select_db($this->db) or die("Database connection failed.");	  
   }   
   function query($query) {
       $result = mysql_query($query, $this->link) or print($query . ', ' . mysql_error());	  
       return $result;
   }   
   function fetcharray($query) {
       $result = $this->query($query);
       $result = mysql_fetch_assoc($result)  or print($query . ', ' . mysql_error());
       return $result;
   }  
   function numrows($query) {
       $result = $this->query($query)  or print($query . ', ' . mysql_error());	
       $result = mysql_num_rows($result);
       return $result;
   }   
   function close() {
       mysql_close($this->link);
   }
}
?>