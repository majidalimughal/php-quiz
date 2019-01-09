<?php
extract($_POST);
include ("class/users.php");
$quiz=new users;
$qus=htmlentities($_POST['qus_id']);
$query="delete from questions where question='$qus'";
if($quiz->delete_quiz($query))
{
	$quiz->url("dashboard.php?msg=run");
}



?>