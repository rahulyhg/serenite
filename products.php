<!---->
<!--header//-->
<?php include 'header.php';?>

<div class="products-model">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>Products</li>
		  <?php
		  $type=$_GET['type'];
		  if(isset($type))
			  echo "<li class='active'>".$type."</li>";
		  ?>
		  
		 </ol>
			<h2>OUR PRODUCTS</h2>			
		 <div id="product_display" class="col-md-9 product-model-sec">
					<?php
                                    
                                    $type=$_GET['type'];
                                    $result=aGetAllMainByTypeDistinctGroup($type);
                                    foreach($result as $row)
                                    {
					?>
					  <a href="<?php echo 'singleproduct.php?id='.$row['group_id'];?>&type=<?php echo $type;?>" ><div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="sm-admin/<?php echo $row['pf_url']; ?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
							</h4>
							</div>
						</div>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust">
								<center><h4><?php echo $row['title'] ;?></h4>
								<p></p>
								<span class="item_price">&#8377;<?php echo $row['price'] ;?></span></a>
								<select class="item_quantity" id="quantity_<?php echo $row['group_id'] ;?>">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<button class="item_add items " onclick ="gettotal('<?php echo $row["group_id"] ;?>')">Add To Cart</button>
						&nbsp;&nbsp;<a href="cart.php" onclick="add('<?php echo $row["group_id"] ;?>')" class="item_add">Buy Now</a></center>
							</div>								
							<div class="clearfix"> </div>
						</div>
					</div>	
					<?php
                          }
                    ?>
			</div>
					<script>
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
		</script>
			<div class="rsidebar span_1_of_left" id="rsidebar">
				 				<!-- side bar using  jquery load function --> 
	      </div>
		</div
		
</div>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					 <script>
					 $(document).ready(function(){
					 	<?php if($_GET['type']=='pillows') { ?>
						 $("#rsidebar").load("filtering_pillows.php");
					 <?php	}
					 elseif ($_GET['type']=='mattress') { ?>
					   $("#rsidebar").load("filtering_mattress.php");
					 <?php } 
					 elseif ($_GET['type']=='decor') { ?>
					   $("#rsidebar").load("filtering_decor.php");
					 <?php } 
					 elseif ($_GET['type']=='mattress_protector') { ?>
					   $("#rsidebar").load("filtering_mattress_protector.php");
					 <?php } ?> 


					 });
						</script>
						<!-- script -->					 
<!---->				 
<?php include 'footer.php' ;?>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<div id="wait" style="display:none;width:100px;height:129px;position:fixed;top:50%;left:50%;padding:2px;z-index:1111111;"><img src='ajax-loader.gif' width="64" height="64" /><br></div>
<script>
$(document).ready(function(){
    $(document).ajaxStart(function(){
		
        $("#wait").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
    });
});
</script>