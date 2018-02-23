<?php
	
	if(isset($_POST['email'])){
		$email=($_POST['email']);
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
		{
		echo $_POST['email'];
		}
		else echo "Invalid email";
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>Email</legend>
		<input type="text" name="email" value="" required ><br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>