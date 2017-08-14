<?php

include_once "lib/sm-constant.php";

include_once "lib/sm-connection.php";

include_once "lib/mainFunctions.php";



if(isset($_REQUEST['id'])&&(isset($_REQUEST['type']))){

    if($_REQUEST['id'] != ''){

      $ok = $_REQUEST['id'];

      $type=$_REQUEST['type'];
      
       $result=aGetImageUrls($ok,$type);
      foreach($result as $row)
      {	
     
      	$url=$row['pf_url'];
      	$del=str_replace("sm-admin/","",$url);
      
      	unlink($del);
      }


      $fine  = aDeleteMain(md5($ok),$type);
      echo "<center><h5 style='green'>The requested entry has been deleted.</h5></center>"; 

    }

}

?>