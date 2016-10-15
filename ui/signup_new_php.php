<?php
    /*if($_POST["signup"]=="Sign Up"){
	   $fnm=$_POST["fname"];
	   $lnm=$_POST["lname"];
	   $usernm=$_POST["username"];
	   $pass=$_POST["password"];
	   $cpass=$_POST["cpass"];
	   $mb=$_POST["mobile"];
	   */
	   require 'signup_new_conect.php';
	   
	   
	   function NewUser(){ 
		   $fnm=$_POST["fname"];
		   $lnm=$_POST["lname"];
		   $usernm=$_POST["username"];
		   $pass=$_POST["password"];
		   $cpass=$_POST["cpass"];
		   $mb=$_POST["mobile"];
		   $query="INSERT INTO `user_info` (`first_name`, `last_name`, `username`, `password`, `mobile`) VALUES ('".$fnm."', '".$lnm."', '".$usernm."', '".$pass."', '".$mb."')";
		   //$query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
		   $data = mysql_query ($query)or die(mysql_error()); 
			
		    if($data){ 
				echo "YOUR REGISTRATION IS COMPLETED..."; 
			} 
		}
		
	   
	   function SignUp(){ 
			if(!empty($_POST['username'])){ /*checking the 'user' name which is 
										from Sign-Up.html, is it empty or have 
										some text*/ 
										
			    $query = mysql_query("SELECT * FROM student.user_info WHERE userName = '$_POST[username]'") or die(mysql_error()); 
			    if(!$row = mysql_fetch_array($query) or die(mysql_error())){ 
				     NewUser(); 
				    } 
			    else { 
				     echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
					 } 
			}
	   }
		
		if(isset($_POST['submit'])){
			SignUp();
		}

	   /*
	   $s="INSERT INTO `user_info` (`first_name`, `last_name`, `username`, `password`, `mobile`) VALUES ('".$fnm."', '".$lnm."', '".$usernm."', '".$pass."', '".$mb."')";
	   
	   if(mysql_query($s)){
		echo "Data Inserted";   
	   }
	   else{
		echo "Data Not Inserted";    
	   } */
	   
   
?>  
