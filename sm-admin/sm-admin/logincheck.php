<?php
include_once "logincheck1.php";
?>
<?php
@session_start();

include_once "lib/sm-connection.php" ;
include_once "lib/sm-constant.php" ;
include_once "lib/admin.php" ;

$user = $_POST['username'];
$pass = $_POST['password'];

$rg = checkAdmin($user,$pass);
// print_r($rg);
// exit();
if(count($rg)>0){

$_SESSION['flag'] = 1;
$_SESSION['id'] = $rg['id'];
$_SESSION['username'] = $rg['username'];

header("location: banners_view.php");

} else {

header("location: index.php?fail=1");

}
?>
