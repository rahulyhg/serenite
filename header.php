<?php
   session_start();
	include_once "sm-admin/sm-admin/lib/sm-constant.php";
	include_once "sm-admin/sm-admin/lib/sm-connection.php";
	include_once "sm-admin/sm-admin/lib/mainFunctions.php";
if(!isset($_SESSION['confirm'])||$_SESSION['confirm']==1)
	{
		$_SESSION['confirm']=0;
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
<title>Serenite By Nagpal's</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="slick/slick.css">

  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="serenite,serenite by nagpal's,nagpal's,mattress,pillow,pillows,corporate purchase,corporate,nagpals,serenite by nagpals,matress,pilow,decor,interior design,interior,sernite,mattress protector" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/etalage.css">
<?php $url= basename($_SERVER["REQUEST_URI"]); ?>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/menu_jquery.js"></script>
</script>
  <style>
      .megamenu>li.active>a{background: #ff751a;color:#fff;}
  </style>
   <script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.etalage.min.js"></script>
  <script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
</head>
<body>
<!-- header -->

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="js/menu_jquery.js"></script>
<script src="js/responsiveslides.min.js"></script>
   <div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
                    
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">sanchitnagpal@gmail.com</a></li>|				
				</ul>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/serenitebynagpals/"><i class="facebook"></i></a></li>
						<li><a href="tel:7093802367"><span class="glyphicon glyphicon-earphone" style="font-size: 17px "></span></a></li>	
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logo_large.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">
			 
			 <div class="cart box_1">
				<a href="cart.php">
					<h3> <span id="simpleCart_quantity" class="simpleCart_quantity">
					<?php 
			 if(!empty($_SESSION['cart_item']))
			 {
			 	$total=0;
				 foreach($_SESSION['cart_item'] as $item=>$value)
				 {
				 	$total+=$value;
			 	}
			 	echo $total;
			 }
			 else
			{
			 	echo "0";
			}
			?></span> item(s)<img src="images/bag.png" alt=""></h3>
				</a>	
				
				<div class="clearfix"> </div>
			 </div>	
                 </div>
		 </div>
		  <div class="clearfix"></div>	
	 </div>

<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		
		<div data-url="<?php echo $url; ?>" > </div>
		 <ul class="megamenu skyblue">
                     
			 <li class="<?php if($url=='index.php'){echo 'active';} ?> grid"><a class="color1" href="index.php">Home</a></li>
                         
			 <li class=" <?php if($url==('products.php?type=pillows')||$url==('products.php?type=mattress_protector')||$url==('products.php?type=decor'))
			 {echo 'active';} ?> grid"><a class="color2" href="#">Express Delivery</a>
				<div class="megapanel">
					
						<div class="col1">
							<div class="h_nav">
								<ul id="nav">
                                                            <li><h4><a href="products.php?type=mattress">
                                                            <i class="fa fa-bed"></i>Mattress</a></h4></li>
                                                            <li><h4><a href="products.php?type=mattress_protector"> <i class="fa fa-street-view"></i>Mattress Protector</a></h4></li>
                                                            <li><h4><a href="products.php?type=pillows"> <i class="fa fa-circle"></i>Pillows</a></h4></li>
                                                           <li><h4><a href="products.php?type=decor"> <i class="fa fa-photo"></i>Decor</a></h4></li>
                                </ul>
                                                        </div>
                                                </div>    
				</div>	
			</li>
			    <li class=" <?php if($url=='products.php?type=mattress'){echo 'active';} ?> grid"><a class="color4" href="products.php?type=mattress">Mattress</a></li>
                        
				<li class=" <?php if($url=='rent_a_mattress.php'){echo 'active';} ?> grid"><a class="color5" href="rent_a_matress.php">Rent A Mattress</a></li>
                                
		<li class=" <?php if($url=='interior_design.php'){echo 'active';} ?> grid"><a class="color6" href="interior_design.php">Interior Design</a></li>				
			
			<li class=" <?php if($url=='corporate_purchase.php'){echo 'active';} ?> grid"><a class="color7" href="corporate_purchase.php">Corporate Purchase</a></li>				
			
		<li class=" <?php if($url=='partner_with_us.php'){echo 'active';} ?> grid"><a class="color8" href="partner_with_us.php">Partner With Us</a></li>	
			
				<li class=" <?php if($url=='doctor.php'){echo 'active';} ?> grid"><a class="color8" href="doctor.php">Doctor</a></li>			
			   </ul> 
			  
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>

</body>