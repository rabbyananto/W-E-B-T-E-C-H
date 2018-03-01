<?php
  session_start();
  
     $userlist=$_SESSION['userlist']; 
  
  foreach($userlist as $username)
  {
  if($user['username']==$_REQUEST['username'])
  {
	  if($user['password']==$_REQUEST['password'])
	
	  {
		  header("Location:Dashboard.html");
	  }  
  }
  }



?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="Dashboard.html">
	<table width="50%" border="1">
		
    <tr>
   <td>
	<fieldset>

<legend> LOGIN </legend>
<table>
<tr>
<td>
<label> <b> User Name </b> </label></td><td>:</td><td>
<input type="text" name="name"/></td></tr><br/>
<tr>
<td>
<label> <b> Password: </b> </label></td><td>:</td>
<td>
<input type="password" name="password"/></td></tr>
</table>
<hr/>

<input type="checkbox" name="check"/>

<label> <b> Remember Me </b> </label>
<input  type="submit" name="submit" value="submit"/>
<a href="Home.html"> Forget Password</a>


<br/>


</fieldset>
 </tr>

	
</table>