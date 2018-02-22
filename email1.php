<?php
     
	if(isset($_POST['user_email']) == True && empty ($_POST['user_email'])==false){
		$email = $_POST['user_email'];
		if (filter_var($email,FILTER_VALIDATE_EMAIL){
		echo "valid";
		}
		else{
		echo "invalid";}
	}
	
?>
<form action="#" method="POST">
	<fieldset>
		<legend>Email</legend>
		<input type="text" name="email" value="" ><br/><br/>
		<input type="submit" >
		<hr/>
	</fieldset>
</form>