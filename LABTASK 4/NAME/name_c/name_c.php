<form action="#" method="POST">
	<fieldset>
		<legend>NAME</legend>
		<input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; }?>" ><br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>