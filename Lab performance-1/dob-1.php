<?php
	error_reporting(0);
	if(isset($_POST['dd'],$_POST['mm'],$_POST['yy'] )){
	if($_POST['dd'] == "01"){ echo  "01";}
	if($_POST['dd'] == "02"){ echo  "02";}
	if($_POST['dd'] == "03"){ echo  "03";}
	if($_POST['dd'] == "04"){ echo  "04";}
	echo "//";
	if($_POST['mm'] == "01"){ echo "01";}
	if($_POST['mm'] == "02"){ echo "02";}
	if($_POST['mm'] == "03"){ echo "03";}
	if($_POST['mm'] == "04"){ echo "04";}
	echo "//";
	if($_POST['yy'] == "2001"){ echo "2001";}
	if($_POST['yy'] == "2002"){ echo "2002";}
	if($_POST['yy'] == "2003"){ echo "2003";}
	if($_POST['yy'] == "2004"){ echo "2004";}
	}
?>