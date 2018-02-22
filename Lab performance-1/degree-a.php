<?php
	
	if(isset($_POST['SSC']) &&
   $_POST['SSC'] == 'Yes')
{
    echo "SSC";
}
elseif(isset($_POST['HSC']) &&
   $_POST['HSC'] == 'Yes')
{
    echo "HSC";
}
elseif(isset($_POST['BSC']) &&
   $_POST['BSC'] == 'Yes')
   {
echo "B.SC";
   }
   elseif(isset($_POST['MSC']) &&
   $_POST['MSC'] == 'Yes')
   {
echo "M.SC";
   }
	
	
?>