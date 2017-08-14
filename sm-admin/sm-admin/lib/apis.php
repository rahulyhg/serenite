<?php 
	include_once "sm-constant.php";
	include_once "sm-connection.php";
	include_once "mainFunctions.php";

	$type = "user";
	$main = aGetAllMainByType($type);	

	echo json_encode($main);
?>