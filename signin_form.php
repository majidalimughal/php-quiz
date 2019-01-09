<?php
include("class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($username,$password))
{
	$signin->url("home.php");
}
else
{
	$signin->url("index.php?run=failed");
}
?>