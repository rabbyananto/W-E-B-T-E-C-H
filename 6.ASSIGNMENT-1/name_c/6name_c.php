<form action="#" method="POST">
	<fieldset>
		<legend>BLOOD GROUP</legend>
		<select name="bgroup" >
					
			<option value="ds" <?php if(isset($_POST['bgroup']) && $_POST['bgroup'] == "ds"){echo "selected";}?>>ds </option>
			<option value="O" <?php if(isset($_POST['bgroup']) && $_POST['bgroup'] == "O"){echo "selected";}?>>O</option>
			<option value="Saab" <?php if(isset($_POST['bgroup']) && $_POST['bgroup'] == "Saab"){echo "selected";}?>>Saab</option>
  
		</select>
		
		<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>