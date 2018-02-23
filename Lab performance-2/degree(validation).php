<?php
	error_reporting(0);
	if(isset($_POST['name'])){
		if(sizeof($_POST['name']) > 2){
	if($_POST['name'] == 'SSC')
{
    echo "SSC";
}
if($_POST['name'] == 'HSC')
{
    echo "HSC";
}
if($_POST['name'] == 'BSC')
   {
echo "B.SC";
   }
   if($_POST['name'] == 'MSC')
   {
echo "M.SC";
		}}
	else echo "please select atleast two";}
	
	
?>
<form action="#" method="post">
<fieldset>
		<legend>Degree</legend>
<input type="checkbox" name="name" value="SSC" />
SSC
<input type="checkbox" name="name" value="HSC" />
HSC
<input type="checkbox" name="name" value="BSC" />
B.SC
<input type="checkbox" name="name" value="MSC" />
M.SC
<br/><br/>
<input type="submit" name="formSubmit" value="Submit" />

</fieldset>
</form>