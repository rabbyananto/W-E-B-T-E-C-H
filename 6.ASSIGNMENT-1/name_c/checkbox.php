<!DOCTYPE html>
<html>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  
 



if (count($gender) < 2){
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<fieldset>
		<legend>DEGREE</legend>
		 <input type="checkbox" name="gender[]"  value="female">SSC
  <input type="checkbox" name="gender[]"  value="malde">HSC
  <input type="checkbox" name="gender[]"  value="maele">BSC
  <input type="checkbox" name="gender[]"  value="maqle">MSC
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
<hr/>
		<input type="submit" name="submit" value="Submit" >
		
	</fieldset>
</form>
</body>
</html>