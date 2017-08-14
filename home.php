<?php
	include_once "sm-admin/lib/sm-constant.php";
	include_once "sm-admin/lib/sm-connection.php";
	include_once "sm-admin/lib/mainFunctions.php";
?>
<!DOCTYPE HTML>
<html>
<body>
<!-- header -->
 <div id="fb-root"></div>
<?php include 'header.php';?>
<!---->
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				
					 <?php
        $type = "banner";
        $okie = aGetAllMainByType($type);
        if(is_array($okie)){
          foreach ($okie as $key => $value) {
      ?>
       <li><img src="<?php echo $value['pf_url']; ?>" alt=""></li>
      <?php
        }
      }
      ?>
				</ul>
		 </div>
	 </div>
</div>
<!---->
<div class="bottom_content">
	 <div class="container">
             <div class="sofas">
                <div class="col-md-6 sofa grid" style="border:1px solid black;margin-top:33px">
				<ul class="rslides" id="slider2">
				  <li><img src="images/p22.jpg" class="banner" alt=""></li>
				  <li><img src="images/p11.jpg" class="banner"alt=""></li>
				  <li><img src="images/p33.jpg" class="banner" alt=""></li>
				</ul>
                </div>
             </div>
	<div class="col-md-6 col-sm-12 sofa-grid sofs" style="border:1px solid black">
               <div>
                   <div class="fb-page" data-href="https://www.facebook.com/serenitebynagpals" data-tabs="timeline" data-width="500" data-height="508" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                       <blockquote cite="https://www.facebook.com/serenitebynagpals" class="fb-xfbml-parse-ignore">
                           <a href="https://www.facebook.com/serenitebynagpals">Serenite By Nagpal&#039;s</a>
                       </blockquote>
                   </div>
                   </div> 
                <div class="clearfix"></div>
	</div>
         </div>
</div>
<!---->
<div class="new">
	 <div class="container">
		 <h3>Catalog</h3>
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <a href="#"><img src="images/s1.jpg" alt=""/></a>
				 <div class="item-info">
					 <h4><a href="#">Express Delivery</a></h4>
				 </div>
			 </div>
			 <div class="item4">
				 <a href="#"><img src="images/s4.jpg" alt=""/></a>
				  <div class="item-info4">
					 <h4><a href="#">Mattress</a></h4>
				 </div>			 
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">			 
				 <div class="item-info2">
					 <h4><a href="#">Rent a Mattress</a></h4>
				 </div>
				 <a href="#"><img src="images/s2.jpg" alt=""/></a>
			 </div>
			 <div class="item5">	
				 <a href="#"><img src="images/s5.jpg" alt=""/></a>
				 <div class="item-info5">
					 <h4><a href="#">Interior Decoration</a></h4>
				 </div>	
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item3">	
				 <a href="#"><img src="images/s3.jpg" alt=""/></a>
				 <div class="item-info3">
					 <h4><a href="#">Corporate Purchase</a></h4>
				 </div>			 
			 </div>
			 <div class="item6">	
				 <a href="#"><img src="images/s6.jpg" alt=""/></a>
				 <div class="item-info6">
					 <h4><a href="#">Partner with us</a></h4>
				 </div>
				 				 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>
<!---->
<div class="top-sellers">
	 <div class="container">
		 <h3>LATEST-PRODUCTS</h3>
		 <div class="seller-grids">
			 <div class="col-md-3 seller-grid">
				 <a href="#"><img src="images/ts2.jpg" alt=""/></a>
				 <h4><a href="#">Carnival Doublecot Bed</a></h4>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="#"><img src="images/ts11.jpg" alt=""/></a>
				 <h4><a href="#">Home Bar Furniture</a></h4>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="#"><img src="images/ts3.jpg" alt=""/></a>
				 <h4><a href="#">L-shaped Fabric Sofa set</a></h4>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="#"><img src="images/ts4.jpg" alt=""/></a>
				 <h4><a href="#l">Ritz Glass Dinning Table </a></h4>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="brands">
	 <div class="container">
		<!-- <div class="brands-head">
			 <h3>OUR BRANDS</h3>
		 </div>-->
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
                                     <a href="#l"><img src="images/clogo.png" class="img-responsive thumbnail" alt=""/></a>		 
				 </li>
				 <li>
                                     <a href="#"><img src="images/elogo.png"  class="img-responsive thumbnail"alt=""/></a>	
				 </li>
				 <li>
                                     <a href="#"><img src="images/hlogo.png" class="img-responsive thumbnail" alt=""/></a>
				 </li>
				 <li>
                                     <a href="#"><img src="images/mlogo.png"  class="img-responsive thumbnail"alt=""/></a>
				 </li>
				 <li>
                                     <a href="#"><img src="images/sllogo.png" class="img-responsive thumbnail" alt=""/></a>					 
				 </li>
                                  <li>
                                      <a href="#"><img src="images/slogo.png"  class="img-responsive thumbnail" alt=""/></a>					 
				 </li>
                                  <li>
                                      <a href="#"><img src="images/rlogo.jpg" class="img-responsive thumbnail" alt=""/></a>					 
				 </li>
                                  <li>
                                      <a href="#"><img src="images/reclogo.jpg" class="img-responsive thumbnail" alt=""/></a>					 
				 </li>
                                  <li>
                                      <a href="#"><img src="images/plogo.jpg" class="img-responsive thumbnail" alt=""/></a>					 
				 </li>
		    </ul>
	 </div>
	 </div>
</div>
<!---->
<?php include 'footer.php';?>
<?php inclue 'js.php'?>;
</body>
</html>