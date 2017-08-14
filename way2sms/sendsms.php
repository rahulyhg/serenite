<?php
/*------------ Way2sms code by www.Howi.In -----
 |  Find More Scripts @ www.Howi.in
 *--------------------------------------------*/
include('way2sms-api.php');
session_start();
$uid ='9010637524';
$pass = '7777';
$phone = $_POST['phone'];
$_SESSION['phone']=$_POST['phone'];
$message = 'This is your OTP'.$_SESSION['otp'].'enter this to verify your mobile';
sendWay2SMS($uid,$pass,$phone,$message);
/*------------ Way2sms code by www.Howi.In -----
 |  Find More Scripts @ www.Howi.in
 *--------------------------------------------*/
