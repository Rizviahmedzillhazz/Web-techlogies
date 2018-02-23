<?php
	error_reporting(0);
	if(isset($_POST['name'])){
		$a=$_POST['name'];
		if (str_word_count($a)>=2 && ucfirst($a))
		{echo $_POST['name'];}
	else echo "Invalid name";
		
	}
	
?>

<form action="#" method="POST">
	<fieldset>
		<legend>NAME</legend>
		<input type="text" name="name" value="" required ><br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>