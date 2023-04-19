<?php
$db=new PDO('mysql:host=localhost;dbname=group_bbms','root','');
if($db)
{
	echo ".";
}
else
{
	echo "Not Connect";
}
?>