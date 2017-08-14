<?php
@session_start();

$_flag = '';
$_id = '';
$_username = '';

if(isset($_SESSION['flag']) && isset($_SESSION['username'])){
	if($_SESSION['flag'] == 1){

		$_flag = 1;
  	$_username = $_SESSION['username'];

	}
	else {
        $_SESSION['flag'] = 0;
        session_destroy();
        header("location: index.php?fail=3");
    }
	}else {
        $_SESSION['flag'] = 0;
        session_destroy();
        header("location: index.php?fail=3");
    }
?>
