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