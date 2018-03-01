<?php

	error_reporting(0);
		
	$name = $errname = $email= $erremail = $uid = $erruid= $pass = $errpass = $cpass = $errcpass = $gender = $errgender= $dob = $errdob =" " ;
	$flag=1;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$unid =trim($_POST['uname']);
		$pass=trim($_POST['pass']);
		$cpass=trim($_POST['cpass']);
		$gender =trim($_post['gender']);
		$dob=trim($_POST['dob']);
		
		
		
	if(!(empty($name))){
			
			$name="";
			$errname="Can't be empty";
			$flag=0;
	}
		if(!(empty($email)))
		{
			$email="";
			$erremail = "Cannot be empty";
			$flag=0;
		}
		if(!(empty($uid)))
		{
			$uid="";
			$erruid = "Cannot be empty";
			$flag=0;
		}
		
		if(!(empty($pass))){
			
			$pass="";
			$errpass = "Cannot be empty";
			$flag=0;
		}
				
		if(!(empty($cpass))){
			if($cpass!=$pass)
			{	$cpass = "";
				$errcpass = "Must be match";
				$flag=0;
			}
		}
		else
		{
			$cpass="";
			$errcpass = "Cannot be empty";
			$flag=0;
		}
		
		if (empty($gender)) 
		{
			 $errusertype = "Gender is required";
			 $flag=0;
		}
		if(!(empty($dob))){
			
			$dob="";
			$errdob = "Cannot be empty";
			$flag=0;
		}
		
		
		
		if($flag==1)
		{
			$myfile = fopen("users.txt", "a+");
			$txt ="\r\nid:".$id."\r\n";
			$txt .= "name:".$name."\r\n";
			$txt .= "password:".$pass."\r\n";
			$txt .= "Type:".$usertype."\r\n";
			$txt .= 
			$c= mysqli_connect('localhost', 'root', '', 'user');
			$sql="insert into user values(".$name.",".$email.",".$uid.",".$pass.",".$cpass.",".$gender.",".$dob.")";
			mysqli_query($c,$sql);
			mysqli_close($c);
		
					



	$name="";
		$id="";
		$pass="";
		$cpass="";
		
	}
?>	

<html>
<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form action="include/signup.inc.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
			   
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?php echo $name ?>" ><span style="color:red;">*<?php echo $errname ?></span><br/></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<input name="gender" type="radio">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" />/
						<input type="text" size="2" />/
						<input type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>
</html>