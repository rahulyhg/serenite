<?php

	include_once "sm-constant.php";

	include_once "sm-connection.php";

	include_once "mainFunctions.php";

	include_once "resize.php";



	$type = addslashes(@$_POST['type']);



	## User Process

	



## Our Faculty Process



## Notices, Job Offers and Special Offer Process

	

	

	## Image banner Process

	if($type == "banner"){



	// print_r($_POST);

	// exit();



		$dir = 'Banner';

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				if($file == basename( $_FILES['image']['name'])){

					//header("location: testi_add.php?prod=3");

					echo "Image with same name already exist, kindly upload with a different name..<a href='../banners.php'>Try Again</a>";

					exit();

				}

		}



	$target_path = "Banner/";

	$target_path = $target_path . basename($_FILES['image']['name']);



	$target_path = "Banner/";

	$target_path = $target_path . basename($_FILES['image']['name']);



	if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))

	{

		$group_id="banner";

		$pf_name = basename( $_FILES['image']['name']);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		$Product_brand="";

		$content = "";  

		$price = "0";

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$tag_id = "";

		$Quantity="0";

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iInsertMain($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../banners_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../banners_view.php'>Back</a>";

		}



		} else {

			echo "There was an error <a href='../banners_view.php'>Back</a>";

		}

	}
        if($type == "offers"){

		$group_id="offers";

		$title = addslashes(@$_POST['name']);


		$content = addslashes(@$_POST['content']);


		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iInsertMainOffers($group_id,$type, $title,$content,$i_order);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../offers_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../offers_view.php'>Back</a>";

		}

	}

	if($type=="pillows")

{

	 if($_POST['edit']==1)

	 {

	 	$group_id=addslashes(@$_POST['group_id']);

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=ucwords(addslashes(@$_POST['brand']));

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=ucwords(addslashes(@$_POST['size']));

		$material=addslashes(@$_POST['material']);

		$comfort_level=ucwords(addslashes(@$_POST['comfort_level']));

		$pillow_type=ucwords(addslashes(@$_POST['pillow_type']));

		$recommended=addslashes(@$_POST['recommended']);

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iUpdateMainPillows($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$pillow_type,$recommended);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../pillows_edit.php?type=pillows&id=".$group_id."'>Back</a>";

		} else {

			echo "There was an error <a href='../pillows_edit.php?type=pillows&id=".$group_id."'>Back</a>";

		}

	 }

	 else

	 {

		$dir="pillows";

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				foreach ($_FILES['image']['tmp_name'] as $key => $value) {

				if($file == basename( $_FILES['image']['name'][$key])){

					
					echo "Image with same name already exist, kindly upload with a different name..<a href='../pillows_add.php'>Try Again</a>";

					exit();

				}

			}

		}

		for($key=0;$key<count($_FILES['image']['name']);$key++) {

	$target_path = "pillows/";

	$target_path = $target_path . basename($_FILES['image']['name'][$key]);



	if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$target_path))

	{

		$group_id=addslashes(@$_POST['group_id']);

		$pf_name = basename( $_FILES['image']['name'][$key]);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=ucwords(addslashes(@$_POST['brand']));

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=ucwords(addslashes(@$_POST['size']));

		$material=addslashes(@$_POST['material']);

		$comfort_level=ucwords(addslashes(@$_POST['comfort_level']));

		$pillow_type=ucwords(addslashes(@$_POST['pillow_type']));

		$recommended=addslashes(@$_POST['recommended']);

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iInsertMainPillows($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$pillow_type,$recommended);

	}

		

		}
if(is_numeric($ok)){

			echo "Successfully Added <a href='../pillows_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../pillows_view'>Back</a>";

		}
	}

	}

	if($type=="mattress")

	{

		 if($_POST['edit']==1)

	 {

	 	$group_id=addslashes(@$_POST['group_id']);

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=ucwords(addslashes(@$_POST['brand']));

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=ucwords(addslashes(@$_POST['size']));

		$material=wcwords(addslashes(@$_POST['material']));

                 $url=addslashes(@$_POST['url']);

		$comfort_level=ucwords(addslashes(@$_POST['comfort_level']));

		$mattress_type=ucwords(addslashes(@$_POST['mattress_type']));

		$recommended=addslashes(@$_POST['recommended']);

		$i_order = addslashes(@$_POST['i_order']);

		$made_up_for= addslashes(@$_POST['made_up_for']);

		$warranty=addslashes(@$_POST['warranty']);

		$colors=addslashes(@$_POST['colors']);

		$ok = iUpdateMainMattress($group_id,$type,$title,$Product_brand,$url,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$mattress_type,$recommended,$made_up_for,$warranty,$colors);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../mattress_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../mattress_view.php'>Back</a>";

		}

	 }

	 else

	 {

		$dir="mattress";

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				foreach ($_FILES['image']['tmp_name'] as $key => $value) {

				if($file == basename( $_FILES['image']['name'][$key])){

					//header("location: testi_add.php?prod=3");

					echo "Image with same name already exist, kindly upload with a different name..<a href='../mattress_add.php'>Try Again</a>";

					exit();

				}

			}

		}

		for($key=0;$key<count($_FILES['image']['name']);$key++) {

          	$target_path = "mattress/";

	        $target_path = $target_path . basename($_FILES['image']['name'][$key]);



	if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$target_path))

	{

		$group_id=addslashes(@$_POST['group_id']);

		$pf_name = basename( $_FILES['image']['name'][$key]);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=ucwords(addslashes(@$_POST['brand']));

                 $url=addslashes(@$_POST['url']);

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=ucwords(addslashes(@$_POST['size']));

		$material=ucwords(addslashes(@$_POST['material']));

		$comfort_level=ucwords(addslashes(@$_POST['comfort_level']));

		$mattress_type=ucwords(addslashes(@$_POST['mattress_type']));

		$recommended=addslashes(@$_POST['recommended']);

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$made_up_for= addslashes(@$_POST['made_up_for']);

		$warranty=addslashes(@$_POST['warranty']);

		$colors=addslashes(@$_POST['colors']);

		$ok = iInsertMainMattress($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$url,$content,$price,$Quantity,$tag_id,$i_order,$size,$material,$comfort_level,$mattress_type,$recommended,$made_up_for,$warranty,$colors);

	}	

		}
              if(is_numeric($ok)){

			echo "Successfully Added <a href='../mattress_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../mattress_view.php'>Back</a>";

		}

	}

	}
	if($type=="decor")

{

	 if($_POST['edit']==1)

	 {

	 	$group_id=addslashes(@$_POST['group_id']);

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=addslashes(@$_POST['brand']);

		$content = addslashes(@$_POST['content']); 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=addslashes(@$_POST['size']);

		$category=ucwords(addslashes(@$_POST['category']));

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iUpdateMainDecor($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$category);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../decor_edit.php?type=decor&id=".$group_id."'>Back</a>";

		} else {

			echo "There was an error <a href='../decor_edit.php?type=decor&id=".$group_id."'>Back</a>";

		}

	 }

	 else

	 {

		$dir="decor";

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				foreach ($_FILES['image']['tmp_name'] as $key => $value) {

				if($file == basename( $_FILES['image']['name'][$key])){

					//header("location: testi_add.php?prod=3");

					echo "Image with same name already exist, kindly upload with a different name..<a href='../pillows_add.php'>Try Again</a>";

					exit();

				}

			}

		}

		for($key=0;$key<count($_FILES['image']['name']);$key++) {

	$target_path = "decor/";

	$target_path = $target_path . basename($_FILES['image']['name'][$key]);



	if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$target_path))

	{

		$group_id=addslashes(@$_POST['group_id']);

		$pf_name = basename( $_FILES['image']['name'][$key]);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=addslashes(@$_POST['brand']);

		$content = ""; 

		$content = addslashes(@$_POST['content']); 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=addslashes(@$_POST['size']);

		$category=ucwords(addslashes(@$_POST['category']));

		$i_order = addslashes(@$_POST['i_order']);

		$ok = iInsertMainDecor($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size,$category);

	}

		

		}
if(is_numeric($ok)){

			echo "Successfully Added <a href='../decor_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../decor_view'>Back</a>";

		}

	}

	}

	if($type=="mattress_protector")

	{

		 if($_POST['edit']==1)

	 {

	 	$group_id=addslashes(@$_POST['group_id']);

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=ucwords(addslashes(@$_POST['brand']));

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=ucwords(addslashes(@$_POST['size']));

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iUpdateMainMattressProtector($group_id,$type,$title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order);

		if(is_numeric($ok)){

			echo "Successfully Added <a href='../mattress_protector_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../mattress_protector_view.php'>Back</a>";

		}

	 }

	 else

	 {

		$dir="mattress_protector";

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				foreach ($_FILES['image']['tmp_name'] as $key => $value) {

				if($file == basename( $_FILES['image']['name'][$key])){

					//header("location: testi_add.php?prod=3");

					echo "Image with same name already exist, kindly upload with a different name..<a href='../mattress_protector_add.php'>Try Again</a>";

					exit();

				}

			}

		}

		for($key=0;$key<count($_FILES['image']['name']);$key++) {

	$target_path = "mattress_protector/";

	$target_path = $target_path . basename($_FILES['image']['name'][$key]);



	if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$target_path))

	{

		$group_id=addslashes(@$_POST['group_id']);

		$pf_name = basename( $_FILES['image']['name'][$key]);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand=addslashes(@$_POST['brand']);

		$content = ""; 

		$price =addslashes(@$_POST['price']);

		$Quantity=addslashes(@$_POST['quantity']);

		$tag_id = "";

		$size=addslashes(@$_POST['size']);

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iInsertMainMattressProtector($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order,$size);

	}


		}
         if(is_numeric($ok)){

			echo "Successfully Added <a href='../mattress_protector_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../mattress_protector_view.php'>Back</a>";

		}

	}

	}

## Image logos Process

if($type == "logos"){



	// print_r($_POST);

	// exit();



		$dir = 'Logos';

		$files = scandir($dir);

			foreach ($files as $file) if($file !== "." && $file !== ".." ){

				if($file == basename( $_FILES['image']['name'])){

					//header("location: testi_add.php?prod=3");

					echo "Image with same name already exist, kindly upload with a different name..<a href='../logos_add.php'>Try Again</a>";

					exit();

				}

		}



	$target_path = "Logos/";

	$target_path = $target_path . basename($_FILES['image']['name']);



	$target_path = "Logos/";

	$target_path = $target_path . basename($_FILES['image']['name']);



	if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))

	{

		$group_id="logos";

		$pf_name = basename( $_FILES['image']['name']);

		$pf_url = 'sm-admin/lib/'. $target_path;

		$title = addslashes(@$_POST['name']);

		//$approval = addslashes(@$_POST['approval']); //pre-approved

		$Product_brand="";

		$content = "";  

		$price = "0";

		$tag_id = "";

		$Quantity="0";

		$i_order = addslashes(@$_POST['i_order']); // higher the number the better it is

		$ok = iInsertMain($group_id,$type, $pf_name, $pf_url, $title,$Product_brand,$content,$price,$Quantity,$tag_id,$i_order);



		if(is_numeric($ok)){

			echo "Successfully Added <a href='../logos_view.php'>Back</a>";

		} else {

			echo "There was an error <a href='../logos_view'>Back</a>";

		}



		} else {

			echo "There was an error <a href='../logos_view.php'>Back</a>";

		}

	}





?>

