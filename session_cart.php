<?php 
 session_start();
	if(!empty($_POST["option"])) {
switch($_POST["option"]) {
	case "add":
		if(!empty($_POST["quantity"])) 
		{
			$flag=0;
			$id=$_POST['id'];
			$item = array($id=> $_POST["quantity"] );
			if(empty($_SESSION["cart_item"]))
			{
				$_SESSION["cart_item"]=$item;
			}
			else
			{
					foreach ($_SESSION["cart_item"] as $key => $value)
					 {
						if($id==$key)
						{
							$value+=$_POST["quantity"];
							$_SESSION["cart_item"][$key]=$value;
							$flag=1;
						}
					}
				if($flag==0)
				{
					$_SESSION["cart_item"]+=$item;
				}
			}
			 if(!empty($_SESSION['cart_item']))
			 {
			 	$total=0;
				 foreach($_SESSION['cart_item'] as $item=>$value)
				 {
				 	$total+=$value;
			 	}
			 }
			 else
			{
			 	$total=0;
			}
			if(!isset($myobj))
			{
				$myobj=new stdClass();
			}
			$myobj->total=$total;
			$myjson=json_encode($myobj);
			echo $myjson;
		}
	break;
	case "remove":
	include_once "sm-admin/sm-admin/lib/sm-constant.php";
	include_once "sm-admin/sm-admin/lib/sm-connection.php";
	include_once "sm-admin/sm-admin/lib/mainFunctions.php";
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["id"] == $k)
					{
						unset($_SESSION["cart_item"][$k]);				
					}
					if(empty($_SESSION["cart_item"]))
					{
						$cost=0;
						unset($_SESSION["cart_item"]);
					}
			}
		}
		if(!empty($_SESSION['cart_item']))
			 {
			 	$total=0;
				 foreach($_SESSION['cart_item'] as $item=>$value)
				 {
				 	$total+=$value;
			 	}
			 }
			 else
			{
			 	$total=0;
			}
			 $total_cost=0;
			if(isset($_SESSION['cart_item']))
			{
			   foreach ($_SESSION['cart_item'] as $item=>$value) 
			   {
				    $id=$item;
					$row=aGetAllMainByGroupType($id);
					$total_cost+=($row[0]['price']*$value);
			    }
			}
			if(!isset($myobj))
			{
				$myobj=new stdClass();
			}
			$myobj->total=$total;
			$myobj->cost=$total_cost;
			$myjson=json_encode($myobj);
			echo $myjson;
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
	case "update":
		include_once "sm-admin/sm-admin/lib/sm-constant.php";
		include_once "sm-admin/sm-admin/lib/sm-connection.php";
		include_once "sm-admin/sm-admin/lib/mainFunctions.php";
		if(!empty($_POST["quantity"])) 
		{
			$id=$_POST['id'];
			foreach ($_SESSION["cart_item"] as $key => $value)
			 {
				if($id==$key)
				{
					$value=$_POST["quantity"];
					$_SESSION["cart_item"][$key]=$value;
				}
			}
			if(!empty($_SESSION['cart_item']))
			 {
			 	$total=0;
				 foreach($_SESSION['cart_item'] as $item=>$value)
				 {
				 	$total+=$value;
			 	}
			 }
			 else
			{
			 	$total=0;
			}
			 $total_cost=0;
			if(isset($_SESSION['cart_item']))
			{
			   foreach ($_SESSION['cart_item'] as $item=>$value) 
			   {
				    $id=$item;
					$row=aGetAllMainByGroupType($id);
					$total_cost+=($row[0]['price']*$value);
			    }
			}
			if(!isset($myobj))
			{
				$myobj=new stdClass();
			}
			$myobj->total=$total;
			$myobj->cost=$total_cost;
			$myjson=json_encode($myobj);
			echo $myjson;
		}
		break;
	
}
}
?>