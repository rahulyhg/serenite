<?php include 'header.php';?>




<!---->
<?php $type=$_GET['type']; if($type=='mattress') { 
 $res=aGetAllMainByType("offers");
?>
<div class="offers-desc" style="overflow:scroll" >
   <?php foreach($res as $row)
  { ?>
    <p >
     &nbsp;&nbsp;<strong> <?php echo $row["title"]; ?></strong> </br>
     <?php echo $row['content']; ?>
    </br> -------------------------
    </p>
 <?php } ?>
  </div>
 <div class="offers">
    <p class="content-offers">
      Offers
    </p>
  </div>
  <?php } ?>
<div class="single-sec">
	 <div class="container">
		 <ol class="breadcrumb">
			 <li><a href="index.php">Home</a></li>
			 <li class="active">Products</li>
		 </ol>
		 <!-- start content -->	
<?php  if($type=='mattress') { ?>
	 <div class="content">
	
	 <div class="container">
 <?php  $gid=$_GET['id']; $url=getUrl($gid); ?>
       <iframe class="iframe" width="100%" height="500px" src="<?php echo $url[0]['url']; ?>" frameborder="0" allowfullscreen></iframe>
		 </div>
	
</div> <?php } ?>
			<div class="col-md-12 det">
				  <div class="single_left col-md-4">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
                                                     <?php
                                                            $gid=$_GET['id'];
                                                           $result=aGetAllMainByGroupType($gid);
                                                            foreach ($result as $row) {
								?>
							<li>
									<img class="etalage_thumb_image" src="sm-admin/<?php echo $row['pf_url']; ?>" class="img-responsive" alt="image not found" />
									<img class="etalage_source_image" src="sm-admin/<?php echo $row['pf_url']; ?>" class="img-responsive" title="" alt="image not found"/>
							</li>
                                                        <?php
                                                    }
                                                    ?>
                                                            
						 </ul>
						 <div class="clearfix"></div>		
				      </div>
				  </div>
				  <div class="single-right col-md-8">
					 <h3><?php echo $row['title'];?></h3>
					 <div class="id"><h4>ID:<?php echo $row['group_id'];?></h4></div>
					  <div class="cost">
						 <div class="prdt-cost">
							 <ul>
								 <li class="active">&#8377;<?php echo $row['price'];?>/-</li>
									<select class="item_quantity" id="quantity_<?php echo $row['group_id'] ;?>">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<button class="item_add items" onclick ="gettotal('<?php echo $row["group_id"] ;?>')">Add To Cart</button>
								&nbsp;
								<a href="cart.php" onclick="add('<?php echo $row["group_id"] ;?>')" class="item_add">Buy Now</a>
							 </ul>
						 </div>
						 	<script>
						 	function add(id)
						 	{
						 		var quantity=document.getElementById("quantity_"+id).value;
						 		$.ajax({
									type:'post',
									url:'session_cart.php',
									cache:false,
									data:{
										option:"add",
										quantity:quantity,
										id:id
									},
									success:function(response)
									{
										var myobj=JSON.parse(response);
										document.getElementById("simpleCart_quantity").innerHTML=myobj.total;
									}
								});	
						 	}
							function gettotal(id)
							{
								var quantity=document.getElementById("quantity_"+id).value;
								$.ajax({
									type:'post',
									url:'session_cart.php',
									cache:false,
									data:{
										option:"add",
										quantity:quantity,
										id:id
									},
									success:function(response)
									{
										var myobj=JSON.parse(response);
										document.getElementById("simpleCart_quantity").innerHTML=myobj.total;
										window.scrollTo(0,0);
									}
									});
							}
					</script>
						 <div class="clearfix"></div>
					  </div>
					  <div class="single-bottom1 ">
						<h6>Details</h6>
						<p class="prod-desc">
							<span class="product-property">
							<div class="col-md-6 col-sm-12 col-xs-12" >
						<ul>
							<li><span style="font-weight:600">Size:</span>  <?php echo $row['size']; ?></li>
						<li><span style="font-weight:600">Brand:</span> <?php echo $row['Product_Brand']; ?></li>
						<?php if($type=='pillows'||$type=='mattress') {?>
						<li><span style="font-weight:600">Comfort-level: </span> <?php echo $row['comfort_level'];?></li>
						<li><span style="font-weight:600">Material:</span> <?php echo $row['material'];?></li>
						<li><span style="font-weight:600">We Recommend for:</span>  <?php echo $row['recommended']; ?></li>
						<?php }
						if($type=="pillow") { ?>
								<li><span style="font-weight:600">Type: </span> <?php echo $row['pillow_type'];?></li>
								<?php } 
				     if($type=="mattress") { ?>
				    	<li><span style="font-weight:600">Made up for:</span> <?php echo $row['made_up_for']; ?></li>
				    		<li><span style="font-weight:600">Type:</span>  <?php echo $row['mattress_type'];?></li>
				    	<li><span style="font-weight:600">Warranty:</span> <?php echo $row['warranty']; ?></li>
				    	<li><span style="font-weight:600">Colors Available:</span><?php echo $row['colors']; ?></li>
				    	<?php } 
				    	if($type=="decor") {
				    	?>
				    	<li><span style="font-weight:600">Category:</span> <?php echo $row['category']; ?></li>
				    	<li><span style="font-weight:600">Product Description:</span><?php echo $row['content']; ?></li>
				    	<?php } ?>
						</ul>
						</span>
						</p>
					 </div>	
					
					
					   </div>		 
				  </div>
				  <div class="clearfix"></div>
				     <div><br>
		    	<h3>Similar Products:</h3><br />
		    	<div class="bikes-grids">
		    	 <ul id="flexiselDemo3">
			 

			 <?php
			 if($type=="pillows")
        $res=aGetSimilarProductsOfPillows($row['type'],$gid,$row['material'],$row['comfort_level'],$row['pillow_type']);
        elseif($type=="mattress")
        $res=aGetSimilarProductsOfMattress($row['type'],$gid,$row['material'],$row['comfort_level'],$row['mattress_type']);
        else if($type=="mattress_protector")
        $res=aGetSimilarProductsOfMattressProtector($row['type'],$gid,$row['size'],$row['brand']);
        else if($typr=="decor")
        $res=aGetSimilarProductsOfDecor($row['type'],$gid,$row['category']);
        if(is_array($res)){
         foreach ($res as $key) {
      ?>
       <li>
                                     <a href="singleproduct.php?id=<?php echo $key['group_id'];?>"><img src="sm-admin/<?php echo $key['pf_url'];?>" /><br>
                                     <p><?php echo $key['title'];?></p>
                                     <p>Price:&#8377;<?php echo $key['price'];?></p>
                                     </a>		 
				 </li>
      <?php
        }
      }
      ?>
		    </ul>
		    	</div>
		    </div>
		  <script>  
		$(document).ready(function()
			{
          			   var even=0;
          			   
  				$(".offers").click(
   					 function() {    
                       even=even+1;
                      if(even%2==0)
                      {
                      	$(".offers-desc").css("color","white");
                        
                      	$(".offers-desc").animate({height:'100px'},"slow");
                        	$(".offers-desc").animate({width:'0px',opacity:0.01},"slow");
                      }
                       else
                       {
                         $(".offers-desc").css("border","1px solid black");
                       $(".offers-desc").css("display","inline");
           	$(".offers-desc").animate({width:'200px',height:'100px',opacity:0.9},"slow");
     					 	$(".offers-desc").animate({height:'200px'},"slow");
                             	$(".offers-desc").css("color","#ff751a");
                        }
                         
    					});
			});
		    	 $(window).load(function() {			
			  $("#flexiselDemo3").flexisel({
				visibleItems: 2,
				infinite:false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					}
				}
			});
			});
		    </script>

		    </div>
		<div class="clearfix"></div>
		</div>
		
</div>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					 
						<!-- script -->			
						<div class="rsidebar span_1_of_left" id="rsidebar">
				 				<!-- side bar using  jquery load function --> 
	      </div>		 
<!---->				   									 			 
			   </div>
		</div>	     				
		     <div class="clearfix"></div>
	  </div>	 
</div>
<?php include 'footer.php' ;?>
<script type="text/javascript" src="js/jquery-ui.min.js"></script><div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='ajax-loader.gif' width="64" height="64" /><br></div><script>$(document).ready(function(){    $(document).ajaxStart(function(){        $("#wait").css("display", "block");    });    $(document).ajaxComplete(function(){        $("#wait").css("display", "none");    });});</script>