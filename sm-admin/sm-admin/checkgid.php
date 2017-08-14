<?php 
session_start();
  include_once "lib/sm-constant.php";
  include_once "lib/sm-connection.php";
  include_once "lib/mainFunctions.php";
  
	$gid=$_POST['gid'];
	$row=aGetAllMainByGroupType($gid);
	$ok=count($row);

	if(!isset($myobj))
	{
		$myobj=new stdClass();
	}
	if($ok>0)
	{
		$myobj->ok=0;
	}
	else
	{
		$myobj->ok=1;
	}
	echo json_encode($myobj);
	
?>
