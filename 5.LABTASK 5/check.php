<?php
if(isset($_POST['name'])){
	
	
	
}else
	echo "set name"; 


	if(isset($_POST['email'])){
		$email=$_POST['email'];
		
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format"; 
}
else
	echo "set mail"; 
	}
	if(isset($_POST['password'])){
		$pass=$_POST['password'];
		$cpass=$_POST['confirmPassword'];
	if($pass!=$cpass)
{
	echo "pass not match";
}
	}
	else
		echo "set password";
?>