<?php

include ("class/users.php");
$register=new users;
extract($_POST);
$query="insert into signup values('','$name','$username','$email','$password')";
if($register-> signup($query))
{
	$register->url("index.php?run=success");
}

?>