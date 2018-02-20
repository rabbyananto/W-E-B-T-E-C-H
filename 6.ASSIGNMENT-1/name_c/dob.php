<?php error_reporting(0);?>
<form action="#" method="post">
	<fieldset>
		<legend>DOB</legend>
		
		dd
		<select name="dd">
			<option value="01" <?php if($_POST['dd'] == "01"){ echo "selected";} ?>>01</option>
			<option value="02" <?php if($_POST['dd'] == "02"){ echo "selected";} ?>>02</option>
			<option value="03" <?php if($_POST['dd'] == "03"){ echo "selected";} ?>>03</option>
			<option value="04" <?php if($_POST['dd'] == "04"){ echo "selected";} ?>>04</option>
		</select>
		mm
		<select name="mm">
			<option value="01" <?php if($_POST['mm'] == "01"){ echo "selected";} ?>>01</option>
			<option value="02" <?php if($_POST['mm'] == "02"){ echo "selected";} ?>>02</option>
			<option value="03" <?php if($_POST['mm'] == "03"){ echo "selected";} ?>>03</option>
			<option value="04" <?php if($_POST['mm'] == "04"){ echo "selected";} ?>>04</option>
		</select>
		yy
		<select name="yy">
			<option value="2000" <?php if($_POST['yy'] == "2000"){ echo "selected";} ?>>2000</option>
			<option value="2001" <?php if($_POST['yy'] == "2001"){ echo "selected";} ?>>2001</option>
			<option value="2002" <?php if($_POST['yy'] == "2002"){ echo "selected";} ?>>2002</option>
			<option value="2003" <?php if($_POST['yy'] == "2003"){ echo "selected";} ?>>2003</option>
		</select>
		<br/>
		
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>

