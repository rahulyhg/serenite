<!-- header -->
<?php include 'header.php';?>
<!--cart-->
	 
<!------>

<!---->
<div class="cart_main">
	 <div class="container">
		 <div class="cart-items">
			 <h2>My Shopping Bag (<span id="bag"><?php 
			 $total=0;
			 if(!empty($_SESSION['cart_item']))
			 {
				 foreach($_SESSION['cart_item'] as $item=>$value)
				 {
				 	$total+=$value;
			 	}
			 }
			echo $total;
			?>
			</span>)
			</h2>
			<?php 	if($total>0) { ?>
				 <?php } ?>
			   <?php 
			   if(!empty($_SESSION['cart_item']))
			   {
			   	    $temp=0;
			   		foreach ($_SESSION['cart_item'] as $item=>$value) {
			   			$id=$item;
			   			$row=aGetAllMainByGroupType($id);
						
			   	?>
			   	
						<div class="cart-header <?php echo $id;?> ">
						<div class="cart-sec">
						<div class="col-md-3 cart-item cyc">
						 <img src="sm-admin/<?php echo $row[0]['pf_url'];?>"/>
						</div>
							 <div class="col-md-2"><p class="cart-style"><?php echo $row[0]['title'];?></p></div>
							 <div class="col-md-2 "><p class="cart-style"><span id="price"><span>&#8377;</span><?php echo $row[0]['price'];?></span></p></div>
							<div class="col-md-2 "> <p class="qty cart-style select_qty">
							<?php $selected=$value; ?>QTY:</p><select class=" cart-style item_quantity select_qty select_qty1" id="quantity_<?php echo $row[0]['group_id'] ;?>" onchange="updatequantity('<?php echo $row[0]["group_id"]; ?>')" >
									<option <?php if($selected=='1') echo 'selected'; ?> value="1">1</option>
									<option <?php if($selected=='2') echo 'selected'; ?> value="2">2</option>
									<option <?php if($selected=='3') echo 'selected'; ?> value="3">3</option>
									<option <?php if($selected=='4') echo 'selected'; ?> value="4">4</option>
									<option <?php if($selected=='5') echo 'selected'; ?> value="5">5</option>
								</select>
							</div>
							<div class="col-md-2 cart-style"><span class="glyphicon glyphicon-trash" onclick="removeItem('<?php echo $id;?>')"> </span></div>
					   <div class="clearfix"></div>
				</div>
									
			 </div>
			 <?php
			   		}
			   }
			   ?>
		 <script>
					function removeItem(id)
					{
						$.ajax({
							type:'post',
							url:'session_cart.php',
							cache:false,
							data:{
								option:"remove",
								id:id,
							},
							success:function(response)
							{
								var myobj=JSON.parse(response);
								document.getElementById("simpleCart_quantity").innerHTML=myobj.total;
								document.getElementById("bag").innerHTML=myobj.total;
								document.getElementById("total_cost").innerHTML=myobj.cost;
								document.getElementById("final_total").innerHTML=myobj.cost;
								$("#total_cartitems").attr("data-value",myobj.total);
								$('.cart-header.'+id).fadeOut('slow', function(c){
									$('.cart-header.'+id).remove();
								});
							}
						});
					}
					function placeOrder()
					{
						var total=$("#total_cartitems").attr("data-value");
						if(total==0)
						{
							alert("You don't have any items in your cart");
							$("#checkout_form").attr("href","index.php");
						}
					}	
					function updatequantity(id)
					{
						var quantity=document.getElementById("quantity_"+id).value;
						$.ajax({
							type:'post',
							url:'session_cart.php',
							cache:false,
							data:{
								option:"update",
								id:id,
								quantity:quantity
							},
							success:function(response)
							{
								var myobj=JSON.parse(response);
								document.getElementById("simpleCart_quantity").innerHTML=myobj.total;
								document.getElementById("bag").innerHTML=myobj.total;
								document.getElementById("total_cost").innerHTML=myobj.cost;
								document.getElementById("final_total").innerHTML=myobj.cost;
								$("#total_cartitems").attr("data-value",myobj.total);
							}
						});
					}	
		   </script>
		 <div class="cart-total">
			 <a class="continue" href="index.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total" id="total_cost"><?php
				$total_cost=0;
				 if(isset($_SESSION['cart_item']))
				 {
				 foreach ($_SESSION['cart_item'] as $item=>$value) {
				 	$id=$item;
				 	$row=aGetAllMainByGroupType($id);
				 	$total_cost+=($row[0]['price']*$value);
				 }
				}
				 echo $total_cost;
				 ?>
				 </span>
				 <span>Delivery Charges</span>
				 <span class="total"><?php 
				$delivery=0;
				 if($total_cost<500)
				 {
				 	if($total_cost>0)
				 	$delivery=100;
					 else
				 		$delivery=0;
				 }
				 else
				 {
				 	$delivery=0;
				 }
				 echo $delivery;
				 ?></span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final" id="final_total"><?php echo $total_cost+$delivery;?></span>
			 <div class="clearfix"></div>
			  <a id="checkout_form" class="order" href="checkout_form.php" onclick="placeOrder()">Place Order</a>
			 <div id="total_cartitems" data-value="<?php echo $total; ?>"></div>
			</div>
</div>
</div>
</div>
<!---->
<?php include 'footer.php';
?>
<!---->
