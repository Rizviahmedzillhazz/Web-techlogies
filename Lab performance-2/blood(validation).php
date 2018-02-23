<?php
	error_reporting(0);
	if(isset($_POST['B'])){
	if($_POST['B'] == "A+"){ echo  "A+";}
	if($_POST['B'] == "A-"){ echo  "A-";}
	if($_POST['B'] == "B+"){ echo  "B+";}
	if($_POST['B'] == "B-"){ echo  "B-";}
	}?>
<form action="#" method="post">
	<fieldset>
		<legend>Blood group</legend>
		
		<select name="B" value="" required>
		    <option value=>select</option>
			<option value="A+" >A+</option>
			<option value="B+" >B+</option>
			<option value="B-" >B-</option>
			<option value="A-" >A-</option>
		</select>
		<br/>
		
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>