<form action="#" method="post">
<fieldset>
		<legend>Gender</legend>
<input type="radio" name="male" value="Yes" <?phpif(isset($_POST['male']) &&$_POST['male'] == 'Yes'){echo "selected";}?> />
Male
<input type="radio" name="female" value="Yes" <?phpif(isset($_POST['female']) &&$_POST['female'] == 'Yes'){echo "selected";}?> />
Female
<input type="radio" name="other" value="Yes" <?phpif(isset($_POST['other']) &&$_POST['other'] == 'Yes'){echo "selected";}?> />
other
<br/><br/>
<input type="submit" name="formSubmit" value="Submit" />

</fieldset>
</form>