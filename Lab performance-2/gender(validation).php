<?php
	
	if(isset($_POST['male']) &&
   $_POST['male'] == 'Yes')
{
    echo "male";
}
elseif(isset($_POST['female']) &&
   $_POST['female'] == 'Yes')
{
    echo "female";
}
elseif(isset($_POST['other']) &&
   $_POST['other'] == 'Yes')
   {
echo "other";
   }
else
{
echo "none selected";
}	
	
?>
<form action="#" method="post">
<fieldset>
		<legend>Gender</legend>
<input type="radio" name="male" value="Yes" />
Male
<input type="radio" name="female" value="Yes" />
Female
<input type="radio" name="other" value="Yes" />
other
<br/><br/>
<input type="submit" name="submit" value="Submit" />

</fieldset>
</form>