<?php
   $host_name='localhost';
   $username='root';
   $password='bld55bjn1s9v';
   
   if(!@mysql_connect($host_name,$username,$password)){
	   die("Connection Unsucceful");
   }
   else{
	   if(@mysql_select_db('student')){
		   //echo "Connection Successful";
	   }  
	   else{
		   die('Cannot connect to Database');
	   }
   }
   
?>  