					  <!--script-->
						<script>
							$(document).ready(function(){
							 $("#slidebar").slideUp();

						 $("#filters").click(function(){
								 $("#slidebar").slideToggle(1000);
							 });
							$(".check_box").click(function()
							{
									var sizes=document.getElementsByName('size[]');
									var size=[];
									for(i=0,n=sizes.length;i<n;i++)
									{
										if(sizes[i].checked)
										{
											size.push(sizes[i].value);
										}
									}
									var brands=document.getElementsByName('brand[]');
									var brand=[];
									for(i=0,n=brands.length;i<n;i++)
									{
										if(brands[i].checked)
										{
											brand.push(brands[i].value);
										}
									}
									var min_price=document.getElementById('min_price').value;
									var max_price=document.getElementById('max_price').value;
									$.ajax(
									{
										type:'post',
										url:'filtering_products.php',
										cache:false,
										data:
										{
											product_type:"mattress_protector",
											brand:brand,
											size:size,
											min_price:min_price,
											max_price:max_price
										},
										success:function(response){
												document.getElementById('product_display').innerHTML=response;
												window.scrollTo(0,250);
										}
									});
								});
						});
						</script>
				 
				 <form name="form1">
				  <section class="sky-form"><h3 style="color:#ff751a;"><span class="glyphicon glyphicon-minus" id="filters" aria-hidden="true"></span>FILTERS</h3></section>
				   <span id="slidebar">
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Size</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
						 		<?php include_once "sm-admin/sm-admin/lib/sm-constant.php";
									include_once "sm-admin/sm-admin/lib/sm-connection.php";
										include_once "sm-admin/sm-admin/lib/mainFunctions.php";
						 		$result=aGetDetailsForFilters("mattress_protector","size");
						 		foreach ($result as $row) {
						 		  ?>
								<label class="checkbox"><input class="check_box" type="checkbox" name="size[]" value="<?php echo $row['size']; ?>"><i></i><?php echo $row['size']; ?></label> <?php } ?>
						 </div>
					 </div>
				 </section> 
				   <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
						 <p style="color:#ff751a"><b>Enter a Price Range</b> </p>
						  <input type="number" style="width:75px;margin-left:0;line-height:initial" name="min_price" id="min_price" class="in_price" /><b> - </b>
						 <input type="number" style="width:75px;margin-left:0;line-height:initial" name="max_price" id="max_price" class="in_price" />
						 <div class="clearfix"></div></br>
						 <div class="check_box item_add">GO</div>
						 </div>
					 </div>
				 </section> 	
				   		<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
							<div class="col col-4">
								 <?php $result=aGetDetailsForFilters("mattress_protector","Product_Brand");
						  foreach ($result as $row) { ?>
									<label class="checkbox"><input class="check_box" type="checkbox" name="brand[]" value="<?php echo $row['Product_Brand']; ?>"><i></i><?php echo $row['Product_Brand']; ?></label> <?php } ?>
								</div>
							</div>
				   </section>	
				   </span>		
				   </form>
			 </div>